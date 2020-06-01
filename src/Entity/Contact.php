<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Contact
{

    /**
     * 
     * @var Commande|null
     */

    private $commande;

    /**
     * 
     * @var User|null
     */

    private $user;

    /**
     * @return User|null
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * @param User|null $user
     * @return Contact
     */
    public function setUser(?User $user): Contact
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return Commande|null
     */
    public function getCommande(): ?Commande
    {
        return $this->commande;
    }

    /**
     * @param Commande|null $commande
     * @return Contact
     */
    public function setCommande(?Commande $commande): Contact
    {
        $this->commande = $commande;
        return $this;
    }
}
