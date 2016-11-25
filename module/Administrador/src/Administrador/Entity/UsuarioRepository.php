<?php

namespace Administrador\Entity;
use Doctrine\ORM\EntityRepository;

/**
 * Description of UsuarioRepository
 *
 * @author romario
 */

class UsuarioRepository extends EntityRepository{
    
    public function findByLoginAndPassword($login, $password) {
        $userLogin = $this->createQueryBuilder('u')
                        ->select('u.login','u.senha','u.nivel', 'l')
                        ->from('Administrador\Entity\Usuario','l')
                        ->where('l.login = :a1','l.senha = :a2')
                        ->setParameter('a1', $login)->setParameter('a2', $password)->getQuery()->getResult();
        if (!is_null($userLogin)) {
                return $userLogin;      
        }
        return false;
    }  
}