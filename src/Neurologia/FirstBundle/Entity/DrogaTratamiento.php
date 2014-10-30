<?php

namespace Neurologia\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DrogaTratamiento
 */
class DrogaTratamiento
{
    /**
     * @var integer
     */
    private $idInterno;

    /**
     * @var integer
     */
    private $idDroga;

    /**
     * @var integer
     */
    private $idEfectoAdverso;

    /**
     * @var string
     */
    private $dosis;


    /**
     * Set idInterno
     *
     * @param integer $idInterno
     * @return DrogaTratamiento
     */
    public function setIdInterno($idInterno)
    {
        $this->idInterno = $idInterno;

        return $this;
    }

    /**
     * Get idInterno
     *
     * @return integer 
     */
    public function getIdInterno()
    {
        return $this->idInterno;
    }

    /**
     * Set idDroga
     *
     * @param integer $idDroga
     * @return DrogaTratamiento
     */
    public function setIdDroga($idDroga)
    {
        $this->idDroga = $idDroga;

        return $this;
    }

    /**
     * Get idDroga
     *
     * @return integer 
     */
    public function getIdDroga()
    {
        return $this->idDroga;
    }

    /**
     * Set idEfectoAdverso
     *
     * @param integer $idEfectoAdverso
     * @return DrogaTratamiento
     */
    public function setIdEfectoAdverso($idEfectoAdverso)
    {
        $this->idEfectoAdverso = $idEfectoAdverso;

        return $this;
    }

    /**
     * Get idEfectoAdverso
     *
     * @return integer 
     */
    public function getIdEfectoAdverso()
    {
        return $this->idEfectoAdverso;
    }

    /**
     * Set dosis
     *
     * @param string $dosis
     * @return DrogaTratamiento
     */
    public function setDosis($dosis)
    {
        $this->dosis = $dosis;

        return $this;
    }

    /**
     * Get dosis
     *
     * @return string 
     */
    public function getDosis()
    {
        return $this->dosis;
    }
}
