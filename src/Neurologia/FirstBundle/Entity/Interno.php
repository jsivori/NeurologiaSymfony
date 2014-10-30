<?php

namespace Neurologia\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Interno
 */
class Interno
{
    /**
     * @var \DateTime
     */
    private $inicio;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var integer
     */
    private $idTratamiento;


    /**
     * Set inicio
     *
     * @param \DateTime $inicio
     * @return Interno
     */
    public function setInicio($inicio)
    {
        $this->inicio = $inicio;

        return $this;
    }

    /**
     * Get inicio
     *
     * @return \DateTime 
     */
    public function getInicio()
    {
        return $this->inicio;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Interno
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo()
    {
        return $this->activo;
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
