<?php
class Categoria{

  private $model;

  public function __construct(){
    $this->model = new Model($this->tableName(), $this->fields());
  }
  private function tableName(){
    return 'categorias';
  }
  private function fields(){
    return ['nome'];
  }

  public static function createTable(){
    return "CREATE TABLE categorias(
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
