<?php

namespace Neurologia\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Droga
 */
class Droga
{
    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $idDroga;


    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Droga
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
     * Get idDroga
     *
     * @return integer 
     */
    public function getIdDroga()
    {
        return $this->idDroga;
    }
}
