<?php

namespace Neurologia\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoAntecedente
 */
class TipoAntecedente
{
    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $idTipoAntecedente;


    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return TipoAntecedente
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
     * Get idTipoAntecedente
     *
     * @return integer 
     */
    public function getIdTipoAntecedente()
    {
        return $this->idTipoAntecedente;
    }
}
