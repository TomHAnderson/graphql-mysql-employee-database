<?php

namespace Db;

use Zend\ServiceManager\Factory\InvokableFactory;

final class ConfigProvider
{
    /**
     * Loaded at the time the DoctrineEventSubscriber is created
     */
    public function getDoctrineEventSubscriberConfig()
    {
        return [
            'factories' => [
                EventSubscriber\Doctrine\CreatedAtField::class
                    => InvokableFactory::class,
            ],
        ];
    }
}
