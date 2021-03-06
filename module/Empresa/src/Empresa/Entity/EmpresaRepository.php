<?php

namespace Empresa\Entity;
use Doctrine\ORM\EntityRepository;

/**
 * Description of UsuarioRepository
 *
 * @author romario
 */
use Base\Model\Entity;

class EmpresaRepository extends EntityRepository{
    
   public function findByEmpresa($empresa) {
        $result = $this->createQueryBuilder('u')
                        ->select('u.empresa', 'l')
                        ->from(Entity::empresa,'l')
                        ->where('l.empresa LIKE :a1')
                 
                        ->setParameter('a1', '%'.$empresa.'%')
                       
                        ->getQuery()->getResult();
        
                return $result;      
        
    }
     public function findByCnpj($cnpj) {
        $result = $this->createQueryBuilder('u')
                        ->select('u.cnpj', 'l')
                        ->from(Entity::empresa,'l')
                        ->where('l.cnpj = :a1')
                       
                        ->setParameter('a1', $cnpj)
                        ->getQuery()->getResult();
        
                return $result;      
        
    }  
     public function findAll() {
         return $this->findBy(array(), array('empresa' => 'ASC'));
    }
      public function findByCnpjAndPassword($cnpj, $password) {
        $userLogin = $this->createQueryBuilder('u')
                        ->select('u.cnpj','u.senha', 'l')
                        ->from(Entity::empresa,'l')
                        ->where('l.cnpj = :a1','l.senha = :a2')
                        ->setParameter('a1', $cnpj)
                        ->setParameter('a2', $password)
                        ->getQuery()
                        ->getResult();
        if (!is_null($userLogin)) {
                return $userLogin;      
        }
        return false;
    }
}