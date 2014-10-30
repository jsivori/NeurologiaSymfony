<?php

namespace Neurologia\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paciente
 */
class Paciente
{
    /**
     * @var integer
     */
    private $idNivelEducacional;

    /**
     * @var string
     */
    private $ocupacion;

    /**
     * @var string
     */
    private $otros;

    /**
     * @var integer
     */
    private $idObraSocial;

    /**
     * @var integer
     */
    private $idUsuario;

    /**
     * @var integer
     */
    private $idDepartamento;

    /**
     * @var integer
     */
    private $idPersona;


    /**
     * Set idNivelEducacional
     *
     * @param integer $idNivelEducacional
     * @return Paciente
     */
    public function setIdNivelEducacional($idNivelEducacional)
    {
        $this->idNivelEducacional = $idNivelEducacional;

        return $this;
    }

    /**
     * Get idNivelEducacional
     *
     * @return integer 
     */
    public function getIdNivelEducacional()
    {
        return $this->idNivelEducacional;
    }

    /**
     * Set ocupacion
     *
     * @param string $ocupacion
     * @return Paciente
     */
    public function setOcupacion($ocupacion)
    {
        $this->ocupacion = $ocupacion;

        return $this;
    }

    /**
     * Get ocupacion
     *
     * @return string 
     */
    public function getOcupacion()
    {
        return $this->ocupacion;
    }

    /**
     * Set otros
     *
     * @param string $otros
     * @return Paciente
     */
    public function setOtros($otros)
    {
        $this->otros = $otros;

        return $this;
    }

    /**
     * Get otros
     *
     * @return string 
     */
    public function getOtros()
    {
        return $this->otros;
    }

    /**
     * Set idObraSocial
     *
     * @param integer $idObraSocial
     * @return Paciente
     */
    public function setIdObraSocial($idObraSocial)
    {
        $this->idObraSocial = $idObraSocial;

        return $this;
    }

    /**
     * Get idObraSocial
     *
     * @return integer 
     */
    public function getIdObraSocial()
    {
        return $this->idObraSocial;
    }

    /**
     * Set idUsuario
     *
     * @param integer $idUsuario
     * @return Paciente
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return integer 
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set idDepartamento
     *
     * @param integer $idDepartamento
     * @return Paciente
     */
    public function setIdDepartamento($idDepartamento)
    {
        $this->idDepartamento = $idDepartamento;

        return $this;
    }

    /**
     * Get idDepartamento
     *
     * @return integer 
     */
    public function getIdDepartamento()
    {
        return $this->idDepartamento;
    }

    /**
     * Get idPersona
     *
     * @return integer 
     */
    public function getIdPersona()
    {
        return $this->idPersona;
    }
}
