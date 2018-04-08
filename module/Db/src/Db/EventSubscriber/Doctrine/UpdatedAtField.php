<?php

namespace Db\EventSubscriber\Doctrine;

use Datetime;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Events;

final class UpdatedAtField extends AbstractEventSubscriber implements
    EventSubscriber
{
    public function getSubscribedEvents()
    {
        return [
            Events::prePersist,
            Events::preUpdate,
        ];
    }

    public function preUpdate(LifecycleEventArgs $args)
    {
        if (method_exists($args->getObject(), 'setUpdatedAt')) {
            $args->getObject()->setUpdatedAt(new Datetime());
        }
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        if (method_exists($args->getObject(), 'setUpdatedAt')) {
            $args->getObject()->setUpdatedAt(new Datetime());
        }
    }
}
