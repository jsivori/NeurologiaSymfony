<?php

namespace Neurologia\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Diagnostico
 */
class Diagnostico
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
     * @var integer
     */
    private $idDiagnostico;


    /**
     * Set idEvolucion
     *
     * @param integer $idEvolucion
     * @return Diagnostico
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
     * @return Diagnostico
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
     * Get idDiagnostico
     *
     * @return integer 
     */
    public function getIdDiagnostico()
    {
        return $this->idDiagnostico;
    }
}
