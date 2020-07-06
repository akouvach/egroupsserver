<?php

/*
----Creado----2020-06-20 09:49:59.3887744 -0300 -03 m=+0.222587901
*/
require_once '../model/organigramas.php';

class OrganigramasController_base {

	private $model;
	public function __construct(){
		$this->model = new Organigramas();
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