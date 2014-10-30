<?php

namespace Neurologia\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EfectoAdverso
 */
class EfectoAdverso
{
    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $idEfectoAdverso;


    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return EfectoAdverso
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
     * Get idEfectoAdverso
     *
     * @return integer 
     */
    public function getIdEfectoAdverso()
    {
        return $this->idEfectoAdverso;
    }
}
