<?php

/*
----Creado----2020-06-20 09:49:59.2652091 -0300 -03 m=+0.099023901
*/
require_once '../model/geo_ciudades.php';

class Geo_ciudadesController_base {

	private $model;
	public function __construct(){
		$this->model = new Geo_ciudades();
	}

	public function getAll(){
		return $this->model->getAll();
	}

	public function getByPrim( $id){
		return $this->model->getByPrim( $id);
	}

	public function delByPrim( $id){
		return $this->model->delByPrim( $id);
	}
}
?>