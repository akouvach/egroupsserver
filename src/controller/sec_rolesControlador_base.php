<?php

/*
----Creado----2020-06-20 09:49:59.4212557 -0300 -03 m=+0.255068901
*/
require_once '../model/sec_roles.php';

class Sec_rolesController_base {

	private $model;
	public function __construct(){
		$this->model = new Sec_roles();
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