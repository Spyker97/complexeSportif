<?php

namespace App\Repository;

use App\Entity\Evenement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Evenement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Evenement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Evenement[]    findAll()
 * @method Evenement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EvenementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Evenement::class);
    }

    // /**
    //  * @return Evenement[] Returns an array of Evenement objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Evenement
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    function tri_asc()
    {
        return $this->createQueryBuilder('evenement')
            ->orderBy('evenement.nombrePar ','ASC')
            ->getQuery()->getResult();
    }
    function tri_desc()
    {
        return $this->createQueryBuilder('evenement')
            ->orderBy('evenement.nombrePar ','DESC')
            ->getQuery()->getResult();
    }

    function reche($data)
    {
        return $this->createQueryBuilder('evenement')
            ->Where('evenement.titre Like :titre')
            ->setParameter('titre', '%'.$data.'%')
            ->getQuery()->getResult();
    }

    
    function SearchByType($nsc)

    {
        return $this->createQueryBuilder('o')
            ->where ('o.type_id = :type_id')
            ->setParameter('type_id',$nsc)
            ->getQuery()->getResult();

    }
    function SearchNom($nsc)

    {
        return $this->createQueryBuilder('o')
            ->where ('o.titre LIKE :titre')
            ->setParameter('titre','%'.$nsc.'%')
            ->getQuery()->getResult();

    }

    public function findEntitiesByString($str)
    {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT p
            FROM App\Entity\Evenement p
            WHERE p.Evenement LIKE :str'

        )->setParameter('str', $str);

        // returns an array of Product objects
        return $query->getResult();
    }
}
