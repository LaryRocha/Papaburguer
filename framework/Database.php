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
		$this->executeSql("UPDATE {$table} SET ------ = ------- WHERE id = {$id}");
	}
	public function delete($table, $id){
		$this->executeSql("DELETE FROM {$table} WHERE id = {$id}"); 
	}
	public function select($table, $fields, $where){
		$this->executeSql("SELECT FROM {$table} $where id = {$id}"); 
	}	

}

?>
