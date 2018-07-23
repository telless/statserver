<?php

namespace App\Repository;

use App\Entity\JivoAction;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

class JivoActionRepository
{
    private $em;
    /** @var EntityRepository */
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

    public function findForFilter(int $offset)
    {
        return $this->repo->createQueryBuilder('ja')
            ->where('ja.id > :offset')
            ->setParameter('offset', $offset)
            ->getQuery()->getResult();
    }
}