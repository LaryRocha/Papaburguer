<?php
class Produto{

  private $model;

  public function __construct(){
    $this->model = new Model($this->tableName(), $this->fields());
  }
  private function tableName(){
    return 'produtos';
  }
  private function fields(){
    return ['nome', 'temp_preparo', 'preco', 'uni_medida', 'ingredientes', 'categoria', 'status'];
  }

  public static function createTable(){
    return "CREATE TABLE produtos(
      id INTEGER NOT NULL AUTO_INCREMENT,
      nome VARCHAR(255) NOT NULL,
	  temp_preparo VARCHAR(255) NOT NULL,
      preco FLOAT NOT NULL,
      uni_medida VARCHAR(255) NOT NULL,
	  ingredientes INTEGER NOT NULL,
	  categoria INTEGER NOT NULL,
	  status INTEGER NOT NULL,
      PRIMARY KEY(id),
	  FOREIGN KEY (ingredientes) REFERENCES ingredientes(id),
	  FOREIGN KEY (categoria) REFERENCES categorias(id)
    );";
  }

  public function create($data){
    $this->model->newRegister($data);
  }
}


?>
