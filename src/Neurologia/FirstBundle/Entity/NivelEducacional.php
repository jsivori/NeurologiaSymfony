<?php

namespace Neurologia\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NivelEducacional
 */
class NivelEducacional
{
    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $idNivelEducacional;


    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return NivelEducacional
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
     * Get idNivelEducacional
     *
     * @return integer 
     */
    public function getIdNivelEducacional()
    {
        return $this->idNivelEducacional;
    }
}
