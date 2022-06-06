<?php

namespace App\Repository;

use App\Entity\OracleTester;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OracleTester>
 *
 * @method OracleTester|null find($id, $lockMode = null, $lockVersion = null)
 * @method OracleTester|null findOneBy(array $criteria, array $orderBy = null)
 * @method OracleTester[]    findAll()
 * @method OracleTester[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OracleTesterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OracleTester::class);
    }

    public function add(OracleTester $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(OracleTester $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
   

//    /**
//     * @return OracleTester[] Returns an array of OracleTester objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('o.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?OracleTester
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
