<?php

namespace Db;

use Zend\ServiceManager\Factory\InvokableFactory;
use Doctrine\ORM\Mapping\Driver\XmlDriver;

return [
    'doctrine' => [
        'driver' => [
            'db_driver' => [
                'class' => XmlDriver::class,
                'paths' => [
                    __DIR__ . '/orm',
                ],
            ],
            'orm_default' => [
                'drivers' => [
                    'Db\\Entity' => 'db_driver',
                ],
            ],
        ],
        'fixture' => [
            'default' => [
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'factories' => [
                    Fixture\RoleFixture::class => InvokableFactory::class,
                ],
            ],
        ],
    ],
    'service_manager' => [
        'factories' => [
            EventSubscriber\Doctrine\DoctrineEventSubscriberManager::class =>
                EventSubscriber\Doctrine\DoctrineEventSubscriberManagerFactory::class,
        ],
    ],
];
