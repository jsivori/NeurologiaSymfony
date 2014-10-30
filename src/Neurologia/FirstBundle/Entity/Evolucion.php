<?php

namespace Neurologia\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evolucion
 */
class Evolucion
{
    /**
     * @var integer
     */
    private $idHistoriaClinica;

    /**
     * @var string
     */
    private $evolucion;

    /**
     * @var \DateTime
     */
    private $fechaHoraConsulta;

    /**
     * @var integer
     */
    private $idUsuario;

    /**
     * @var integer
     */
    private $idEvolucion;


    /**
     * Set idHistoriaClinica
     *
     * @param integer $idHistoriaClinica
     * @return Evolucion
     */
    public function setIdHistoriaClinica($idHistoriaClinica)
    {
        $this->idHistoriaClinica = $idHistoriaClinica;

        return $this;
    }

    /**
     * Get idHistoriaClinica
     *
     * @return integer 
     */
    public function getIdHistoriaClinica()
    {
        return $this->idHistoriaClinica;
    }

    /**
     * Set evolucion
     *
     * @param string $evolucion
     * @return Evolucion
     */
    public function setEvolucion($evolucion)
    {
        $this->evolucion = $evolucion;

        return $this;
    }

    /**
     * Get evolucion
     *
     * @return string 
     */
    public function getEvolucion()
    {
        return $this->evolucion;
    }

    /**
     * Set fechaHoraConsulta
     *
     * @param \DateTime $fechaHoraConsulta
     * @return Evolucion
     */
    public function setFechaHoraConsulta($fechaHoraConsulta)
    {
        $this->fechaHoraConsulta = $fechaHoraConsulta;

        return $this;
    }

    /**
     * Get fechaHoraConsulta
     *
     * @return \DateTime 
     */
    public function getFechaHoraConsulta()
    {
        return $this->fechaHoraConsulta;
    }

    /**
     * Set idUsuario
     *
     * @param integer $idUsuario
     * @return Evolucion
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
     * Get idEvolucion
     *
     * @return integer 
     */
    public function getIdEvolucion()
    {
        return $this->idEvolucion;
    }
}
