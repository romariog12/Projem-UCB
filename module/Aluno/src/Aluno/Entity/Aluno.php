<?php

namespace Aluno\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aluno
 *
 * @ORM\Table(name="aluno", indexes={@ORM\Index(name="Usuario_FKIndex1", columns={"Administrador_idAdministrador"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Aluno\Entity\AlunoRepository")
 */
class Aluno
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idAluno", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idaluno;

    /**
     * @var integer
     *
     * @ORM\Column(name="Administrador_idAdministrador", type="integer", nullable=false)
     */
    private $administradorIdadministrador;

    /**
     * @var string
     *
     * @ORM\Column(name="Nome", type="string", length=50, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="Curso", type="string", length=50, nullable=true)
     */
    private $curso;

    /**
     * @var string
     *
     * @ORM\Column(name="Matricula", type="string", length=12, nullable=true)
     * 
     */
    private $matricula;
    /**
     * @var string
     *
     * @ORM\Column(name="Modalidade", type="string", length=50, nullable=true)
     * 
     */
    private $modalidade;
    /**
     * @var string
     *
     * @ORM\Column(name="Telefone", type="string", length=50, nullable=true)
     * 
     */
    private $telefone;
    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=50, nullable=true)
     * 
     */
    private $Email;
    /**
     * @var string
     *
     * @ORM\Column(name="Cpf", type="string", length=50, nullable=true)
     * 
     */
    private $Cpf;
    
    function getIdaluno() {
        return $this->idaluno;
    }

    function getAdministradorIdadministrador() {
        return $this->administradorIdadministrador;
    }

    function getNome() {
        return $this->nome;
    }

    function getCurso() {
        return $this->curso;
    }

    function getMatricula() {
        return $this->matricula;
    }
    function getModalidade() {
        return $this->modalidade;
    }
    function getTelefone() {
        return $this->telefone;
    }

    function getEmail() {
        return $this->Email;
    }
    function getCpf() {
        return $this->Cpf;
    }

            
    function setIdaluno($idaluno) {
        $this->idaluno = $idaluno;
    }

    function setAdministradorIdadministrador($administradorIdadministrador) {
        $this->administradorIdadministrador = $administradorIdadministrador;
    }

    function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    function setCurso($curso) {
        $this->curso = $curso;
        return $this;
    }

    function setMatricula($matricula) {
        $this->matricula = $matricula;
        return $this;
    }
    function setModalidade($modalidade) {
        $this->modalidade = $modalidade;
        return $this;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
        return $this;
    }

    function setEmail($Email) {
        $this->Email = $Email;
        return $this;
    }

    function setCpf($Cpf) {
        $this->Cpf = $Cpf;
        return $this;
    }





}

