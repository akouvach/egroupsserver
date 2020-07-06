<?php

/*
----Creado----2020-06-20 09:49:59.4392913 -0300 -03 m=+0.273104301
*/
require_once '../model/sec_roles_permisos.php';

class Sec_roles_permisosController_base {

	private $model;
	public function __construct(){
		$this->model = new Sec_roles_permisos();
	}

	public function getAll(){
		return $this->model->getAll();
	}

	public function getByPrim( $idRol, $idMenu){
		return $this->model->getByPrim( $idRol, $idMenu);
	}

	public function delByPrim( $idRol, $idMenu){
		return $this->model->delByPrim( $idRol, $idMenu);
	}
}
?>