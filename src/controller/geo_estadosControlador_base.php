<?php

/*
----Creado----2020-06-20 09:49:59.271138 -0300 -03 m=+0.104952801
*/
require_once '../model/geo_estados.php';

class Geo_estadosController_base {

	private $model;
	public function __construct(){
		$this->model = new Geo_estados();
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