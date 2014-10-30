<?php

namespace Neurologia\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Definitivo
 */
class Definitivo
{
    /**
     * @var integer
     */
    private $idCategoriaDiagnostico;

    /**
     * @var integer
     */
    private $idDiagnostico;


    /**
     * Set idCategoriaDiagnostico
     *
     * @param integer $idCategoriaDiagnostico
     * @return Definitivo
     */
    public function setIdCategoriaDiagnostico($idCategoriaDiagnostico)
    {
        $this->idCategoriaDiagnostico = $idCategoriaDiagnostico;

        return $this;
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
