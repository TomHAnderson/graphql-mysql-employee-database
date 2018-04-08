<?php

namespace Console\Controller;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

final class AdministratorCreateControllerFactory implements
    FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $instance = new AdministratorCreateController();

        $objectManager = $container->get('doctrine.entitymanager.orm_default');
        $instance->setObjectManager($objectManager);

        $console = $container->get('console');
        $instance->setConsole($console);

        return $instance;
    }
}
