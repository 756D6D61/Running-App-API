<?php

namespace App\Repository;
use App\Entity\Running;
use Doctrine\ORM\EntityRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use \DateTime;

class RunningRepository extends ServiceEntityRepository 
{
    /**
     * @param int|null $id
     * 
     * @return Run[]
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Run::class);
    }
    public function findRuns() {
        $now = new DateTime;
        return $this
            -> createQueryBuilder('j')
            -> where('j.rundate > :date')
            -> setParameter('date', $now->format("d-M-Y"))
            -> getQuery()
            -> getResult();
    }
}