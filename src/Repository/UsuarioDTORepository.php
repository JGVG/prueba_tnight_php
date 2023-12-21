<?php

namespace App\Repository;

use App\Entity\UsuarioDTO;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UsuarioDTO>
 *
 * @method UsuarioDTO|null find($id, $lockMode = null, $lockVersion = null)
 * @method UsuarioDTO|null findOneBy(array $criteria, array $orderBy = null)
 * @method UsuarioDTO[]    findAll()
 * @method UsuarioDTO[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsuarioDTORepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UsuarioDTO::class);
    }

//    /**
//     * @return UsuarioDTO[] Returns an array of UsuarioDTO objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?UsuarioDTO
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
