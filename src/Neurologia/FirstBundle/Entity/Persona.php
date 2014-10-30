<?php

namespace Neurologia\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Persona
 */
class Persona
{
    /**
     * @var integer
     */
    private $idEstadoCivil;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apellido;

    /**
     * @var string
     */
    private $numeroDocumento;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $email;

    /**
     * @var \DateTime
     */
    private $fechaDeNacimiento;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @var integer
     */
    private $idTipoDocumento;

    /**
     * @var integer
     */
    private $idSexo;

    /**
     * @var integer
     */
    private $idPersona;


    /**
     * Set idEstadoCivil
     *
     * @param integer $idEstadoCivil
     * @return Persona
     */
    public function setIdEstadoCivil($idEstadoCivil)
    {
        $this->idEstadoCivil = $idEstadoCivil;

        return $this;
    }

    /**
     * Get idEstadoCivil
     *
     * @return integer 
     */
    public function getIdEstadoCivil()
    {
        return $this->idEstadoCivil;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Persona
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     * @return Persona
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set numeroDocumento
     *
     * @param string $numeroDocumento
     * @return Persona
     */
    public function setNumeroDocumento($numeroDocumento)
    {
        $this->numeroDocumento = $numeroDocumento;

        return $this;
    }

    /**
     * Get numeroDocumento
     *
     * @return string 
     */
    public function getNumeroDocumento()
    {
        return $this->numeroDocumento;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Persona
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Persona
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set fechaDeNacimiento
     *
     * @param \DateTime $fechaDeNacimiento
     * @return Persona
     */
    public function setFechaDeNacimiento($fechaDeNacimiento)
    {
        $this->fechaDeNacimiento = $fechaDeNacimiento;

        return $this;
    }

    /**
     * Get fechaDeNacimiento
     *
     * @return \DateTime 
     */
    public function getFechaDeNacimiento()
    {
        return $this->fechaDeNacimiento;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Persona
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set idTipoDocumento
     *
     * @param integer $idTipoDocumento
     * @return Persona
     */
    public function setIdTipoDocumento($idTipoDocumento)
    {
        $this->idTipoDocumento = $idTipoDocumento;

        return $this;
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

    /**
     * Set idSexo
     *
     * @param integer $idSexo
     * @return Persona
     */
    public function setIdSexo($idSexo)
    {
        $this->idSexo = $idSexo;

        return $this;
    }

    /**
     * Get idSexo
     *
     * @return integer 
     */
    public function getIdSexo()
    {
        return $this->idSexo;
    }

    /**
     * Get idPersona
     *
     * @return integer 
     */
    public function getIdPersona()
    {
        return $this->idPersona;
    }
}
