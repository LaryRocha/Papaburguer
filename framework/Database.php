<?php

namespace framework

class Database {
	
	public function insert ($cargo, $campos, $dados){
		$this->executarComando("INSERT INTO {$tabela}(". implode(',',$campos).") VALUES (". implode(',',$dados).");");
	}
}

$db = new Database($conexao);

$db->insert('cargo', ['nome'], ['Gerente']);
$db->insert('cargo', ['nome'], ['Administrador']);
$db->insert('cargo', ['nome'], ['Garçon']);
?>