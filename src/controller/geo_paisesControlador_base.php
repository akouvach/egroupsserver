<?php

/*
----Creado----2020-06-20 09:49:59.2833552 -0300 -03 m=+0.117169901
*/
require_once '../model/geo_paises.php';

class Geo_paisesController_base {

	private $model;
	public function __construct(){
		$this->model = new Geo_paises();
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