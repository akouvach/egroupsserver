<?php

/*
----Creado----2020-06-20 09:49:59.4674798 -0300 -03 m=+0.301292501
*/
require_once '../model/temas.php';

class TemasController_base {

	private $model;
	public function __construct(){
		$this->model = new Temas();
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