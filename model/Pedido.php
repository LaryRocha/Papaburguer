<?php
class Pedido{

  private $model;

  public function __construct(){
    $this->model = new Model($this->tableName(), $this->fields());
  }
  private function tableName(){
    return 'pedidos';
  }
  private function fields(){
    return ['nome', 'usuario', 'senha', 'status'];
  }

  public static function createTable(){
    return "CREATE TABLE pedidos(
      id INTEGER NOT NULL AUTO_INCREMENT,
      funcionario INTEGER NOT NULL,
	  data_hora DATETIME NOT NULL,
	  status INTEGER NOT NULL,
      PRIMARY KEY(id),
	  FOREIGN KEY (funcionario) REFERENCES usuarios(id)
    );";
  }

  public function create($data){
    $this->model->newRegister($data);
  }
}


?>
