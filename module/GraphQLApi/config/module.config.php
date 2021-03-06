<?php
return [
    'controllers' => [
        'factories' => [
            'GraphQLApi\\V1\\Rpc\\GraphQL\\Controller' => \GraphQLApi\V1\Rpc\GraphQL\GraphQLControllerFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'graph-ql.rpc.graph-ql' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/graphql',
                    'defaults' => [
                        'controller' => 'GraphQLApi\\V1\\Rpc\\GraphQL\\Controller',
                        'action' => 'graphQL',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'graph-ql.rpc.graph-ql',
        ],
    ],
    'zf-rpc' => [
        'GraphQLApi\\V1\\Rpc\\GraphQL\\Controller' => [
            'service_name' => 'GraphQL',
            'http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'route_name' => 'graph-ql.rpc.graph-ql',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'GraphQLApi\\V1\\Rpc\\GraphQL\\Controller' => 'Json',
        ],
        'accept_whitelist' => [
            'GraphQLApi\\V1\\Rpc\\GraphQL\\Controller' => [
                0 => 'application/vnd.graph-ql.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
        ],
        'content_type_whitelist' => [
            'GraphQLApi\\V1\\Rpc\\GraphQL\\Controller' => [
                0 => 'application/vnd.graph-ql.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
];
