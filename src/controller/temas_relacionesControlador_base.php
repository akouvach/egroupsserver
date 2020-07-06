<?php

/*
----Creado----2020-06-20 09:49:59.4712082 -0300 -03 m=+0.305020901
*/
require_once '../model/temas_relaciones.php';

class Temas_relacionesController_base {

	private $model;
	public function __construct(){
		$this->model = new Temas_relaciones();
	}

	public function getAll(){
		return $this->model->getAll();
	}

	public function getByPrim( $idTema, $idTemaRel){
		return $this->model->getByPrim( $idTema, $idTemaRel);
	}

	public function delByPrim( $idTema, $idTemaRel){
		return $this->model->delByPrim( $idTema, $idTemaRel);
	}
}
?>