<?php

namespace Neurologia\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoriaDiagnostico
 */
class CategoriaDiagnostico
{
    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $idCategoriaDiagnostico;


    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return CategoriaDiagnostico
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
     * Get idCategoriaDiagnostico
     *
     * @return integer 
     */
    public function getIdCategoriaDiagnostico()
    {
        return $this->idCategoriaDiagnostico;
    }
}
