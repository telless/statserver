<?php

namespace App\Repository;

use App\Entity\JivoAction;
use Doctrine\ORM\EntityManagerInterface;

class JivoActionRepository
{
    private $em;
    private $repo;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
        $this->repo = $this->em->getRepository(JivoAction::class);
    }

    public function save(JivoAction $action)
    {
        $this->em->persist($action);
    }

    public function findForFilter(array $filter)
    {
        return $filter;
    }
}