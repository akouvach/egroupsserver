<?php

/*
----Creado----2020-06-20 09:49:59.4536363 -0300 -03 m=+0.287449201
*/
require_once '../model/sec_roles_usuarios.php';

class Sec_roles_usuariosController_base {

	private $model;
	public function __construct(){
		$this->model = new Sec_roles_usuarios();
	}

	public function getAll(){
		return $this->model->getAll();
	}

	public function getByPrim( $idUsuario, $idRol, $fechaDesde){
		return $this->model->getByPrim( $idUsuario, $idRol, $fechaDesde);
	}

	public function delByPrim( $idUsuario, $idRol, $fechaDesde){
		return $this->model->delByPrim( $idUsuario, $idRol, $fechaDesde);
	}
}
?>