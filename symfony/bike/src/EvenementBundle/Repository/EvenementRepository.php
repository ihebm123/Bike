<?php

namespace EvenementBundle\Repository;

/**
 * EvenementRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EvenementRepository extends \Doctrine\ORM\EntityRepository
{
    public  function findByMot($mot) {
        $query = $this->createQueryBuilder('e')
            ->where('e.titre LIKE :mot')
            ->setParameter('mot', '%'.$mot.'%')
            ->getQuery();

        return $query->getResult();
    }
}
