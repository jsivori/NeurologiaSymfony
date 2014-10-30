<?php

namespace Neurologia\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Imagen
 */
class Imagen
{
    /**
     * @var integer
     */
    private $idEstudio;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $archivo;

    /**
     * @var integer
     */
    private $idImagen;


    /**
     * Set idEstudio
     *
     * @param integer $idEstudio
     * @return Imagen
     */
    public function setIdEstudio($idEstudio)
    {
        $this->idEstudio = $idEstudio;

        return $this;
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

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Imagen
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
     * Set archivo
     *
     * @param string $archivo
     * @return Imagen
     */
    public function setArchivo($archivo)
    {
        $this->archivo = $archivo;

        return $this;
    }

    /**
     * Get archivo
     *
     * @return string 
     */
    public function getArchivo()
    {
        return $this->archivo;
    }

    /**
     * Get idImagen
     *
     * @return integer 
     */
    public function getIdImagen()
    {
        return $this->idImagen;
    }
}
