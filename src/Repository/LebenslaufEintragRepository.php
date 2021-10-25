<?php

namespace App\Repository;

use App\Entity\LebenslaufEintrag;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LebenslaufEintrag|null find($id, $lockMode = null, $lockVersion = null)
 * @method LebenslaufEintrag|null findOneBy(array $criteria, array $orderBy = null)
 * @method LebenslaufEintrag[]    findAll()
 * @method LebenslaufEintrag[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LebenslaufEintragRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LebenslaufEintrag::class);
    }

    // /**
    //  * @return LebenslaufEintrag[] Returns an array of LebenslaufEintrag objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LebenslaufEintrag
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
