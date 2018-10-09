<?php

namespace GraphQL\V1\Rpc\GraphQL;

use Interop\Container\ContainerInterface;
use ZF\Doctrine\GraphQL\Type\Loader as TypeLoader;
use ZF\Doctrine\GraphQL\Filter\Loader as FilterLoader;
use ZF\Doctrine\GraphQL\Resolve\Loader as ResolveLoader;

class GraphQLControllerFactory
{
    public function __invoke(
        ContainerInterface $container,
        $requestedName,
        array $options = null
    ) {
        $typeLoader = $container->get(TypeLoader::class);
        $filterLoader = $container->get(FilterLoader::class);
        $resolveLoader = $container->get(ResolveLoader::class);

        return new GraphQLController($typeLoader, $filterLoader, $resolveLoader);
    }
}
