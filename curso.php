<?php

require_once("alumno.php");

class Curso extends Profesor
{
  private $nombre;
  private $codigoCurso;
  private $cupoMaximo;
  private $listaAlumno = array();
  private $profesorTitular;
  private $profesorAdjunto;

  public function getNombre(){
    return $this->nombre;
  }

  public function setNombre($unNombre){
    $this->nombre= $unNombre;
  }

  public function getCodigoCurso(){
    return $this->codigoCurso;
  }

  public function setCodigoCurso($unCodigoCurso){
    $this->codigoCurso= $unCodigoCurso;
  }

  public function getCupoMaximo(){
    return $this->cupoMaximo;
  }

  public function setCupoMaximo($unCupoMaximo){
    $this->cupoMaximo= $unCupoMaximo;
  }

  public function listarAlumnos(){
    return var_dump($this->listaAlumno);
  }

  public function agregarUnAlumno(Alumno $unAlumno){
      if (count($this->listaAlumno < $this->cupoMaximo) {
      array_push($this->listaAlumno, $unAlumno);
      return true;
    }
      else {
        return false;
      }
  }
  public function getProfesor(){
    return var_dump($this->profesor);
  }
}
