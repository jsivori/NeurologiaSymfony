<?php

namespace Neurologia\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tratamiento
 */
class Tratamiento
{
    /**
     * @var integer
     */
    private $idEvolucion;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $idTratamiento;


    /**
     * Set idEvolucion
     *
     * @param integer $idEvolucion
     * @return Tratamiento
     */
    public function setIdEvolucion($idEvolucion)
    {
        $this->idEvolucion = $idEvolucion;

        return $this;
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

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Tratamiento
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
     * Get idTratamiento
     *
     * @return integer 
     */
    public function getIdTratamiento()
    {
        return $this->idTratamiento;
    }
}
