<?php
class Ingrediente{

  private $model;

  public function __construct(){
    $this->model = new Model($this->tableName(), $this->fields());
  }
  private function tableName(){
    return 'ingredientes';
  }
  private function fields(){
    return ['nome', 'descricao', 'foto', 'preco', 'uni_medida', 'status'];
  }

  public static function createTable(){
    return "CREATE TABLE ingredientes(
      id INTEGER NOT NULL AUTO_INCREMENT,
      nome VARCHAR(255) NOT NULL,
      descricao TEXT NOT NULL,
      foto VARCHAR(255) NOT NULL,
      preco FLOAT NOT NULL,
      uni_medida VARCHAR(255) NOT NULL,
	  status INTEGER NOT NULL,
      PRIMARY KEY(id)
    );";
  }

  public function create($data){
    $this->model->newRegister($data);
  }
}


?>
