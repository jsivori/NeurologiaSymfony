<?php

namespace Neurologia\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EnfermedadActual
 */
class EnfermedadActual
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
    private $idEnfermedadActual;


    /**
     * Set idHistoriaClinica
     *
     * @param integer $idHistoriaClinica
     * @return EnfermedadActual
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
     * @return EnfermedadActual
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
     * Get idEnfermedadActual
     *
     * @return integer 
     */
    public function getIdEnfermedadActual()
    {
        return $this->idEnfermedadActual;
    }
}
