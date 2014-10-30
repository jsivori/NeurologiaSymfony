<?php

namespace Neurologia\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoEstudio
 */
class TipoEstudio
{
    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $siglas;

    /**
     * @var integer
     */
    private $idTipoEstudio;


    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return TipoEstudio
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
     * Set siglas
     *
     * @param string $siglas
     * @return TipoEstudio
     */
    public function setSiglas($siglas)
    {
        $this->siglas = $siglas;

        return $this;
    }

    /**
     * Get siglas
     *
     * @return string 
     */
    public function getSiglas()
    {
        return $this->siglas;
    }

    /**
     * Get idTipoEstudio
     *
     * @return integer 
     */
    public function getIdTipoEstudio()
    {
        return $this->idTipoEstudio;
    }
}
