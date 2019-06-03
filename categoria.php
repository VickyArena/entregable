<?php
abstract class Categoria
  {
    protected $tipo;
    protected $especialidad;
    protected $horas;

  public function getTipo(){
    return $this->tipo;
  }

  public function setTipo($unTipo){
    $this->tipo= $unTipo;
  }

  public function getEspecialidad(){
    return $this->especialidad;

  public function setEspecialidad($unaEspecialidad){
    $this->especialidad= $unaEspecialidad;
  }

  public function getHoras(){
    return $this->horas;

  public function setHoras($unasHoras){
    $this->horas= $unasHoras;
  }

}
