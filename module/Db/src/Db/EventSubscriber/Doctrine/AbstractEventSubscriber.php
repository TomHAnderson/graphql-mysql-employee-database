<?php

namespace Db\EventSubscriber\Doctrine;

use Zend\Authentication\AuthenticationService;

abstract class AbstractEventSubscriber
{
    private $authentication;

    public function getAuthentication()
    {
        return $this->authentication;
    }

    public function setAuthentication(AuthenticationService $authentication)
    {
        $this->authentication = $authentication;
    }
}
