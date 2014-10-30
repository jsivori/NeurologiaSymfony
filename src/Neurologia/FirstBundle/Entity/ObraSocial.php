<?php

namespace Neurologia\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ObraSocial
 */
class ObraSocial
{
    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $idObraSocial;


    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return ObraSocial
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
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
}
