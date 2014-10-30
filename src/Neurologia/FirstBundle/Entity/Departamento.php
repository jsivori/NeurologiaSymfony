<?php

namespace Neurologia\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departamento
 */
class Departamento
{
    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $idDepartamento;


    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Departamento
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
     * Get idDepartamento
     *
     * @return integer 
     */
    public function getIdDepartamento()
    {
        return $this->idDepartamento;
    }
}
