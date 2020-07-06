<?php

require_once "../model/grupo.php";

class GrupoController {
  
  private $model;

  public function __construct(){
      $this->model = new Grupo();
  }


  public function getAll(){
      return $this->model->getAll();
  }

  public function getById($id){
      return $this->model->getById($id);
  }

  public function delById($id){
    return $this->model->delete($id);
}

}
?>
