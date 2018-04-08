<?php

namespace Db\EventSubscriber\Doctrine;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\ServiceManager as ZendServiceManager;
use DoctrineModule\Persistence\ObjectManagerAwareInterface;
use DoctrineModule\Persistence\ProvidesObjectManager;
use Db\ConfigProvider;

final class DoctrineEventSubscriberManager extends ZendServiceManager implements
    ObjectManagerAwareInterface
{
    use ProvidesObjectManager;

    private $serviceLocator;

    public function getServiceLocator()
    {
        return $this->serviceLocator;
    }

    public function setServiceLocator(ContainerInterface $serviceLocator)
    {
        $this->serviceLocator = $serviceLocator;

        return $this;
    }

    public function subscribe()
    {
        foreach ((array)$this->factories as $name => $squishedname) {
            $instance = $this->get($name);
            $instance->setAuthentication($this->getServiceLocator()->get('authentication'));

            $this->getObjectManager()->getEventManager()->addEventSubscriber($instance);
        }
    }
}
