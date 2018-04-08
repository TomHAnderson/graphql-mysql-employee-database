<?php

namespace Console;

return [
    'controllers' => [
        'factories' => [
            Controller\AdministratorCreateController::class
                => Controller\AdministratorCreateControllerFactory::class,
        ],
    ],

    'console' => [
        'router' => [
            'routes' => [
                'db-administrator-create' => [
                    'type' => 'simple',
                    'options' => [
                        'route'    => 'db:administrator:create',
                        'defaults' => [
                            'controller' => Controller\AdministratorCreateController::class,
                            'action' => 'index'
                        ],
                    ],
                ],
            ],
        ],
    ],
];
