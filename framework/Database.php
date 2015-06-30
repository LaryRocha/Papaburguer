<?php

namespace framework

class Database {
	
	public function conect($dsn){
	}
	private function executeSql($sql){
	}
	public function insert ($table, $fields, $datas){
		$this->executeSql("INSERT INTO {$table}(". implode(',',$fields).") VALUES (". implode(',',$datas).");");
	}
	public function update($table, $fields, $datas){
	}
	public function delete($table, $id){
	}
	public function select($table, $fields, $where){
	}	

}

?>
