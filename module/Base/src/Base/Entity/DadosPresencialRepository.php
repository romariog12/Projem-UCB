<?php

namespace Base\Entity;
use Base\Model\Entity;

class DadosPresencialRepository extends \Doctrine\ORM\EntityRepository{
    
    public function listaCursos($idcurso, $idDados) {
        $query = $this->createQueryBuilder('u')
                        ->select('u.curso', 'l')
                        ->from(Entity::dadosPresencial,'l')
                        ->where('l.idcurso = :a1')
                        ->andWhere('l.iddados = :a2')
                        ->setParameter('a1', $idcurso)
                        ->setParameter('a2', $idDados)->getQuery()->getResult();
        return $query;
    }
        
     
} 

