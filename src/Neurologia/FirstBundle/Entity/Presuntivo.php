<?php

namespace Neurologia\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Presuntivo
 */
class Presuntivo
{
    /**
     * @var integer
     */
    private $idDiagnostico;


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
