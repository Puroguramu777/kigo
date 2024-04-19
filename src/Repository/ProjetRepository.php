<?php

namespace App\Repository;

use App\Entity\Projet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Projet>
 *
 * @method Projet|null find($id, $lockMode = null, $lockVersion = null)
 * @method Projet|null findOneBy(array $criteria, array $orderBy = null)
 * @method Projet[]    findAll()
 * @method Projet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Projet::class);
    }

    public function findAllProjet()
    {
        $db = $this->findAllOptimize();
        return $db->getQuery()->getResult();
    }

    public function findAllOptimize()
    {
        //Requete pour récupéré les valeurs dans les annonces et adresses
        $entityManager = $this->getEntityManager();
        
        $query = $entityManager->createQuery(
            'SELECT
            p.id,
            p.title,
            p.description  
            FROM App\Entity\Projet p
            

           ');
            
            return $query->getResult();
        
        
        
        
        // return $this->createQueryBuilder('a')
        //     ->leftJoin('a.typeLogement', 'typeLogement')
        //     ->addSelect('typeLogement');
            
    }

//    /**
//     * @return Projet[] Returns an array of Projet objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Projet
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
