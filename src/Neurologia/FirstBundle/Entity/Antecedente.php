<?php

namespace Neurologia\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Antecedente
 */
class Antecedente
{
    /**
     * @var integer
     */
    private $idHistoriaClinica;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $idTipoAntecedente;

    /**
     * @var integer
     */
    private $idAntecedente;


    /**
     * Set idHistoriaClinica
     *
     * @param integer $idHistoriaClinica
     * @return Antecedente
     */
    public function setIdHistoriaClinica($idHistoriaClinica)
    {
        $this->idHistoriaClinica = $idHistoriaClinica;

        return $this;
    }

    /**
     * Get idHistoriaClinica
     *
     * @return integer 
     */
    public function getIdHistoriaClinica()
    {
        return $this->idHistoriaClinica;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Antecedente
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
     * Set idTipoAntecedente
     *
     * @param integer $idTipoAntecedente
     * @return Antecedente
     */
    public function setIdTipoAntecedente($idTipoAntecedente)
    {
        $this->idTipoAntecedente = $idTipoAntecedente;

        return $this;
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

    /**
     * Get idAntecedente
     *
     * @return integer 
     */
    public function getIdAntecedente()
    {
        return $this->idAntecedente;
    }
}
