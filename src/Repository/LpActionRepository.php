<?php

namespace App\Repository;

use App\Entity\LpAction;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

class LpActionRepository
{
    private $em;
    /** @var EntityRepository */
    private $repo;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
        $this->repo = $this->em->getRepository(LpAction::class);
    }

    public function save(LpAction $action)
    {
        $this->em->persist($action);
    }

    public function findForFilter(int $offset)
    {
        return $this->repo->createQueryBuilder('lp')
            ->where('lp.id > :offset')
            ->setParameter('offset', $offset)
            ->getQuery()->getResult();
    }
}