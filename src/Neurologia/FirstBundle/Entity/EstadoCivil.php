<?php

namespace Neurologia\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstadoCivil
 */
class EstadoCivil
{
    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $idEstadoCivil;


    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return EstadoCivil
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
     * Get idEstadoCivil
     *
     * @return integer 
     */
    public function getIdEstadoCivil()
    {
        return $this->idEstadoCivil;
    }
}
