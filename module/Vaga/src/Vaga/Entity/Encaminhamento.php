<?php

namespace Vaga\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Encaminhamento
 *
 * @ORM\Table(name="encaminhamento")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Vaga\Entity\VagaRepository")
 */
class Encaminhamento
{
    /**
     * @var string
     *
     * @ORM\Column(name="Inicio", type="string", nullable=false)
     */
    private $inicio;

    /**
     * @var string
     *
     * @ORM\Column(name="Fim", type="string", nullable=false)
     */
    private $fim;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Recisao", type="date", nullable=true)
     */
    private $recisao;

    /**
     * @var string
     *
     * @ORM\Column(name="Relatorio", type="string", nullable=false)
     */
    private $relatorio;

    /**
     * @var string
     *
     * @ORM\Column(name="Entregue", type="string", length=50, nullable=false)
     */
    private $entregue;
    /**
     * @var string
     *
     * @ORM\Column(name="anoDocumento", type="string", length=50, nullable=false)
     */
    private $anoDocumento;
     /**
     * @var string
     *
     * @ORM\Column(name="mesDocumento", type="string", length=50, nullable=false)
     */
    private $mesDocumento;

    /**
     * @var integer
     *
     * @ORM\Column(name="idEncaminhamento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idencaminhamento;

    /**
     * @var integer
     *
     * @ORM\Column(name="idVaga_Encaminhamento", type="integer", nullable=false)
     */
    private $idvagaEncaminhamento;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="idAluno_Encaminhamento", type="integer", nullable=false)
     */
    private $idalunoEncaminhamento;
    /**
     * @var integer
     *
     * @ORM\Column(name="cursoDocumento", type="integer", nullable=false)
    
     */
    private $cursoDocumento;

    function getInicio() {
        return $this->inicio;
    }

    function getFim() {
        return $this->fim;
    }

    function getRecisao() {
        return $this->recisao;
    }

    function getRelatorio() {
        return $this->relatorio;
    }
    function getAnoDocumento() {
        return $this->anoDocumento;
    }

    function getMesDocumento() {
        return $this->mesDocumento;
    }

        function getEntregue() {
        return $this->entregue;
    }

    function getIdencaminhamento() {
        return $this->idencaminhamento;
    }

    function getIdvagaEncaminhamento() {
        return $this->idvagaEncaminhamento;
    }

    function getIdalunoEncaminhamento() {
        return $this->idalunoEncaminhamento;
    }
    function getCursoDocumento() {
        return $this->cursoDocumento;
    }

        function setInicio($inicio) {
        $this->inicio = $inicio;
        return $this;
    }

    function setFim($fim) {
        $this->fim = $fim;
        return $this;
    }

    function setRecisao(\DateTime $recisao) {
        $this->recisao = $recisao;
        return $this;
    }

    function setRelatorio($relatorio) {
        $this->relatorio = $relatorio;
        return $this;
    }
    function setAnoDocumento($anoDocumento) {
        $this->anoDocumento = $anoDocumento;
        return $this;
    }

    function setMesDocumento($mesDocumento) {
        $this->mesDocumento = $mesDocumento;
        return $this;
    }

        function setEntregue($entregue) {
        $this->entregue = $entregue;
        return $this;
    }

    function setIdencaminhamento($idencaminhamento) {
        $this->idencaminhamento = $idencaminhamento;
        return $this;
    }

    function setIdvagaEncaminhamento($idvagaEncaminhamento) {
        $this->idvagaEncaminhamento = $idvagaEncaminhamento;
        return $this;
    }

    function setIdalunoEncaminhamento($idalunoEncaminhamento) {
        $this->idalunoEncaminhamento = $idalunoEncaminhamento;
        return $this;
    }


    function setCursoDocumento($cursoDocumento) {
        $this->cursoDocumento = $cursoDocumento;
        return $this;
    }



}

