<?php

class Alumno
{
  private $nombre;
  private $apellido;
  private $codigoDeAlumno;

  public function getNombre(){
    return $this->nombre;
  }

  public function setNombre($unNombre){
    $this->nombre= $unNombre;
  }

  public function getApellido(){
    return $this->apellido;
  }

  public function setApellido($unApellido){
    $this->apellido= $unApellido;
  }

  public function getCodigoDeAlumno(){
    return $this->codigoDeAlumno;
  }

  public function setCodigoDeAlumno($unCodigoDeAlumno){
    $this->codigoDeAlumno= $unCodigoDeAlumno;
  }


  public function __construct (string $unNombre, string $unApellido, integer $unCodigoDeAlumno)
  {
    $this->nombre= $unNombre;
    $this->apellido= $unApellido;
    $this->codigoDeAlumno= $unCodigoDeAlumno;
  }
}
