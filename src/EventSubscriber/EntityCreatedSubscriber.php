<?php

namespace App\EventSubscriber;

use App\Entity\AbstractEntity;

use App\Entity\Commande;
use DateTime;
use Doctrine\Common\EventSubscriber;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Doctrine\ORM\Events;

class EntityCreatedSubscriber implements EventSubscriber
{
    public function getSubscribedEvents()
    {
        return [
            Events::prePersist
        ];
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $object = $args->getObject();

        if ($object instanceof Commande) {
            $object->setDateCommande(new \DateTime('now'));

            $heure = $object->getDateCommande();
            $object->setHeureLivraison(new \DateTime('now'));
        }
    }
}
