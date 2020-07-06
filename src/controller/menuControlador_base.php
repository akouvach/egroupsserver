<?php

/*
----Creado----2020-06-20 09:49:59.3670934 -0300 -03 m=+0.200907201
*/
require_once '../model/menu.php';

class MenuController_base {

	private $model;
	public function __construct(){
		$this->model = new Menu();
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