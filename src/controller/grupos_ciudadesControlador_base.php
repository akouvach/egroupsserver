<?php

/*
----Creado----2020-06-20 09:49:59.3202396 -0300 -03 m=+0.154053901
*/
require_once '../model/grupos_ciudades.php';

class Grupos_ciudadesController_base {

	private $model;
	public function __construct(){
		$this->model = new Grupos_ciudades();
	}

	public function getAll(){
		return $this->model->getAll();
	}

	public function getByPrim( $idCiudad, $idGrupo, $fechaDesde){
		return $this->model->getByPrim( $idCiudad, $idGrupo, $fechaDesde);
	}

	public function delByPrim( $idCiudad, $idGrupo, $fechaDesde){
		return $this->model->delByPrim( $idCiudad, $idGrupo, $fechaDesde);
	}
}
?>