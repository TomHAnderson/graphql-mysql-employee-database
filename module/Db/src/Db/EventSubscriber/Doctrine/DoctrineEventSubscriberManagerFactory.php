<?php

namespace Db\EventSubscriber\Doctrine;

use Interop\Container\ContainerInterface;
use Db\ConfigProvider;

final class DoctrineEventSubscriberManagerFactory
{
    public function __invoke(
        ContainerInterface $container,
        $requestedName,
        array $options = null
    ) {
        $objectManager = $container->get('doctrine.entitymanager.orm_default');
        $configProvider = new ConfigProvider();

        $instance = new $requestedName($configProvider->getDoctrineEventSubscriberConfig());
        $instance->setServiceLocator($container);
        $instance->setObjectManager($objectManager);

        return $instance;
    }
}
