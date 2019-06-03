<?php

require_once("alumno.php");
require_once("profesor.php");
require_once("curso.php");

  class DigitalHouseManager{

    private $listaAlumnos = array();
    private $listaProfesores = array();
    private $listaCursos = array();


    public function getlistaAlumnos(Alumno $listaAlumnos){
      return $this->listaAlumnos;
    }

    public function setlistaAlumnos($listaAlumnos){
      $this->listaAlumnos= $listaAlumnos;
    }

    public function getlistaProfesores(Profesor $listaProfesores){
      return $this->listaProfesores;
    }

    public function setlistaProfesores($listaProfesores){
      $this->listaProfesores= $listaProfesores;
    }

    public function getlistaCursos (Curso $listaCursos){
      return $this->listaCursos;
    }

    public function setlistaCursos($listaCursos){
      $this->listaCursos= $listaCursos;
    }

    public function altaCurso(Curso $nombre, Curso $codigoCurso, Curso $cupoMaximo){
      $this->nombre= $nombreCurso;
      $this->codigoCurso= $codigoCurso;
      $this->cupoMaximo= $cupoMaximoDealumnos;
      return array_push($this->listaCursos, $nombreCurso);
    }
    //fijarse si hay que especificar de que clase viene el parámetro y si el cuerpo de la función está bien
    //Crear un método en la clase DigitalHouseManager que permita dar de alta a un
    //curso. El método recibe como parámetros el nombre del curso, el código y el cupo
    //máximo de alumnos que se admite. El método debe crear un curso con los datos
    //correspondientes y agregarlo a la lista de cursos.
    //○ public function altaCurso($nombre, $codigoCurso, $cupoMaximoDealumnos)

    public function altaProfesorAdjunto(Profesor $nombre, Profesor $apellido, Profesor $codigoProfesor, $cantidadDeHoras){
      $this->nombre= $nombreProfesor;
      $this->apellido= $apellidoProfesor;
      $this->codigoProfesor= $codigoProfesor;
      $this->cantidadDeHoras= $cantidadDeHoras;

      new $profesorAdjunto($nombre, $apellido, $codigoProfesor, $cantidadDeHoras)
      return array_push($this->listaProfesores, $profesorAdjunto);
    }

    //cómo seteo la antiguedad? y donde la declaro?
    //Crear un método en la clase DigitalHouseManager que permita dar de alta a un
    //profesor adjunto. El método recibe como parámetros el nombre del profesor, el
    //apellido, el código y la cantidad de horas disponibles para consulta. La antigüedad
    //inicial del profesor será cero. El método debe crear un profesor adjunto con los datos
    //correspondientes y agregarlo a la lista de profesores.
    //○ public function altaProfesorAdjunto($nombre, $apellido, $codigoProfesor, $cantidadDeHoras)

  }
