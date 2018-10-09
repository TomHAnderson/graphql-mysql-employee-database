<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2014-2016 Zend Technologies USA Inc. (http://www.zend.com)
 */

namespace Application;

use Zend\Mvc\MvcEvent;
use Zend\Uri\UriFactory;
use ZF\MvcAuth\Authentication\DefaultAuthenticationListener;
use ZF\MvcAuth\MvcAuthEvent;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    public function onBootstrap(MvcEvent $event)
    {
        $serviceManager = $event->getApplication()->getServiceManager();
        $response = $serviceManager->get('response');

        if ($response instanceof \Zend\Http\PhpEnvironment\Response) {
            $response->getHeaders()->addHeaderLine("Access-Control-Allow-Origin: *");

            UriFactory::registerScheme('chrome-extension', 'Zend\Uri\Uri');

            if (isset($_SERVER['HTTP_CF_VISITOR'])) {
                $visitor = json_decode($_SERVER['HTTP_CF_VISITOR']);

                // If CloudFlare is in use redirect to https
                if ($visitor->scheme === 'http') {
                    header('Location: https://api.etreedb.org' . $_SERVER['REQUEST_URI']);
                    exit;
                }
            }
        }

        UriFactory::registerScheme('chrome-extension', 'Zend\Uri\Uri');
    }
}
