<?php

namespace Neurologia\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoDocumento
 */
class TipoDocumento
{
    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $idTipoDocumento;


    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return TipoDocumento
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
     * Get idTipoDocumento
     *
     * @return integer 
     */
    public function getIdTipoDocumento()
    {
        return $this->idTipoDocumento;
    }
}
