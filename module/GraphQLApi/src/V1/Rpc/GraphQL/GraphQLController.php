<?php

namespace GraphQLApi\V1\Rpc\GraphQL;

use Exception;
use Zend\Mvc\Controller\AbstractActionController;
use ZF\ContentNegotiation\ViewModel as ContentNegotiationViewModel;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\InputObjectType;
use GraphQL\Type\Schema;
use GraphQL\GraphQL;
use ZF\Doctrine\GraphQL\Type\Loader as TypeLoader;
use ZF\Doctrine\GraphQL\Filter\Loader as FilterLoader;
use ZF\Doctrine\GraphQL\Resolve\Loader as ResolveLoader;
use ZF\Doctrine\GraphQL\Context;
use Db\Entity;
use ZF\Doctrine\Audit\Entity as AuditEntity;
use ZF\Doctrine\Audit\AuditEntity as AuditedEntity;

class GraphQLController extends AbstractActionController
{
    private $typeLoader;
    private $filterLoader;
    private $resolveLoader;

    public function __construct(TypeLoader $typeLoader, FilterLoader $filterLoader, ResolveLoader $resolveLoader)
    {
        $this->typeLoader = $typeLoader;
        $this->filterLoader = $filterLoader;
        $this->resolveLoader = $resolveLoader;
    }

    public function graphQLAction()
    {
        $input = $this->plugin('bodyParams')();
        if (! $input) {
            $input = $this->params()->fromQuery();
        }

        if (! $input) {
            $this->getResponse()->setContent(json_encode([
                'errors' => [[
                    'message' => 'Missing Query',
                ]],
            ]));

            $this->getResponse()->getHeaders()->addHeaders([
                'Content-Type' => 'application/json',
            ]);

            return $this->getResponse();
        }

        $typeLoader = $this->typeLoader;
        $resolveLoader = $this->resolveLoader;
        $filterLoader = $this->filterLoader;

        $context = (new Context())
            ->setLimit(100)
            ->setHydratorSection('default')
            ->setUseHydratorCache(false)
            ;

        $schema = new Schema([
            'query' => new ObjectType([
                'name' => 'query',
                'fields' => [
                    'employee' => [
                        'type' => Type::listOf($typeLoader(Entity\Employee::class, $context)),
                        'args' => [
                            'filter' => $filterLoader(Entity\Employee::class, $context),
                        ],
                        'resolve' => $resolveLoader(Entity\Employee::class, $context),
                    ],
                    'department' => [
                        'type' => Type::listOf($typeLoader(Entity\Department::class, $context)),
                        'args' => [
                            'filter' => $filterLoader(Entity\Department::class, $context),
                        ],
                        'resolve' => $resolveLoader(Entity\Department::class, $context),
                    ],
                ],
            ]),
        ]);

        $query = $input['query'];
        $variableValues = isset($input['variables']) ? $input['variables'] : null;

        try {
            $result = GraphQL::executeQuery($schema, $query, $rootValue = null, $context, $variableValues);
            $output = $result->toArray();
        } catch (Exception $e) {
            $output = [
                'errors' => [
                    [
                        'exception' => $e->getMessage()
                    ]
                ]
            ];
        }

        return new ContentNegotiationViewModel([
            'payload' => $output,
        ]);
    }
}
