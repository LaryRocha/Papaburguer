<?php
class Cargo{

  private $model;

  public function __construct(){
    $this->model = new Model($this->tableName(), $this->fields());
  }
  private function tableName(){
    return 'cargos';
  }
  private function fields(){
    return ['nome'];
  }

  public static function createTable(){
    return "CREATE TABLE cargos(
      id INTEGER NOT NULL AUTO_INCREMENT,
      nome VARCHAR(255) NOT NULL,
      PRIMARY KEY(id)
    );";
  }

  public function create($data){
    $this->model->newRegister($data);
  }
}


?>
