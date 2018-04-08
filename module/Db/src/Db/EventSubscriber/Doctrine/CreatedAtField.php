<?php

namespace Db\EventSubscriber\Doctrine;

use Datetime;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Events;
use Db\Entity;

final class CreatedAtField extends AbstractEventSubscriber implements
    EventSubscriber
{
    public function getSubscribedEvents()
    {
        return [
            Events::prePersist,
        ];
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        if (method_exists($args->getObject(), 'setCreatedAt')) {
            $args->getObject()->setCreatedAt(new Datetime());
        }
    }
}
