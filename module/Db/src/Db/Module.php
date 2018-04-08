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

        // Subscribe all Doctrine Event Listeners
        $serviceManager
            ->get(EventSubscriber\Doctrine\DoctrineEventSubscriberManager::class)
            ->subscribe()
            ;
    }
}
