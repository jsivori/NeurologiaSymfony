<?php

namespace Neurologia\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistoriaClinica
 */
class HistoriaClinica
{
    /**
     * @var integer
     */
    private $idPaciente;


    /**
     * Get idPaciente
     *
     * @return integer 
     */
    public function getIdPaciente()
    {
        return $this->idPaciente;
    }
}
