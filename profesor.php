<?php

class Profesor extends Categoria
{
  private $nombre;
  private $apellido;
  private $antiguedad;
  private $codigoProfesor;

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

  public function getAntiguedad(){
    return $this->antiguedad;
  }

  public function setAntiguedad($unaAntiguedad){
    $this->antiguedad= $unaAntiguedad;
  }

  public function getCodigoProfesor(){
    return $this->codigoProfesor;
  }

  public function setCodigoProfesor($unCodigoProfesor){
    $this->codigoProfesor= $unCodigoProfesor;
  }

}
