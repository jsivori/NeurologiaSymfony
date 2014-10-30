<?php

namespace Neurologia\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Motivo
 */
class Motivo
{
    /**
     * @var integer
     */
    private $idHistoriaClinica;

    /**
     * @var string
     */
    private $detalle;

    /**
     * @var integer
     */
    private $idMotivo;


    /**
     * Set idHistoriaClinica
     *
     * @param integer $idHistoriaClinica
     * @return Motivo
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
     * Set detalle
     *
     * @param string $detalle
     * @return Motivo
     */
    public function setDetalle($detalle)
    {
        $this->detalle = $detalle;

        return $this;
    }

    /**
     * Get detalle
     *
     * @return string 
     */
    public function getDetalle()
    {
        return $this->detalle;
    }

    /**
     * Get idMotivo
     *
     * @return integer 
     */
    public function getIdMotivo()
    {
        return $this->idMotivo;
    }
}
