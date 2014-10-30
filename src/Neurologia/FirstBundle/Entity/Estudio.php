<?php

namespace Neurologia\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estudio
 */
class Estudio
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
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var string
     */
    private $institucion;

    /**
     * @var integer
     */
    private $idTipoEstudio;

    /**
     * @var integer
     */
    private $idEstudio;


    /**
     * Set idEvolucion
     *
     * @param integer $idEvolucion
     * @return Estudio
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
     * @return Estudio
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Estudio
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set institucion
     *
     * @param string $institucion
     * @return Estudio
     */
    public function setInstitucion($institucion)
    {
        $this->institucion = $institucion;

        return $this;
    }

    /**
     * Get institucion
     *
     * @return string 
     */
    public function getInstitucion()
    {
        return $this->institucion;
    }

    /**
     * Set idTipoEstudio
     *
     * @param integer $idTipoEstudio
     * @return Estudio
     */
    public function setIdTipoEstudio($idTipoEstudio)
    {
        $this->idTipoEstudio = $idTipoEstudio;

        return $this;
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

    /**
     * Get idEstudio
     *
     * @return integer 
     */
    public function getIdEstudio()
    {
        return $this->idEstudio;
    }
}
