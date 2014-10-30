<?php

namespace Neurologia\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sexo
 */
class Sexo
{
    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $idSexo;


    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Sexo
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
     * Get idSexo
     *
     * @return integer 
     */
    public function getIdSexo()
    {
        return $this->idSexo;
    }
}
