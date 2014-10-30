<?php

namespace Neurologia\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Externo
 */
class Externo
{
    /**
     * @var integer
     */
    private $idTratamiento;


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
