<?php

namespace Db;

use Zend\EventManager\EventInterface;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/../../config/module.config.php';
    }

    public function onBootstrap(EventInterface $e)
    {
        $serviceManager = $e->getApplication()->getServiceManager();
        $objectManager = $serviceManager->get('doctrine.entitymanager.orm_default');

        // Subscribe all Doctrine Event Listeners
        $serviceManager
            ->get(EventSubscriber\Doctrine\DoctrineEventSubscriberManager::class)
            ->subscribe()
            ;

        $platform = $objectManager->getConnection()->getDatabasePlatform();
        $platform->registerDoctrineTypeMapping('enum', 'string');
    }
}
