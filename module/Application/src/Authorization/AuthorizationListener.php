<?php

namespace Application\Authorization;

use ZF\MvcAuth\MvcAuthEvent;
use Db\Fixture\RoleFixture;

final class AuthorizationListener
{
    public function __invoke(MvcAuthEvent $mvcAuthEvent)
    {
        $authorization = $mvcAuthEvent->getAuthorizationService();

        // Deny from all
  #      $authorization->deny();

        $authorization->addResource('Application\Controller\IndexController::index');
        $authorization->allow(RoleFixture::$GUEST, 'Application\Controller\IndexController::index');

        $authorization->addResource('ZF\OAuth2\Controller\Auth::authorize');
        $authorization->allow(RoleFixture::$USER, 'ZF\OAuth2\Controller\Auth::authorize');
    }
}
