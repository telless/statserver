<?php

namespace App\Repository;

use Doctrine\ORM\EntityManagerInterface;

class SyncState
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function call(): void
    {
        $this->em->flush();
    }
}