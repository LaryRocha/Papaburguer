<?php

namespace framework

class Database {

	private $cnx;

	public function __construct($dsn){
		$this->cnx = new PDO($dsn);
	}

	private function executeSql($sql){
		return $this->cnx->query($sql);
	}

	public function insert ($table, $fields, $datas){
		return $this->executeSql("INSERT INTO {$table}(". implode(',',$fields).") VALUES (". implode(',',$datas).");");
	}

	public function update($table, $fields, $datas, $where){
		$updateQuery = []
		foreach($fields as $id => $field){
			array_push($updateQuery, "{$field} = '{$datas[$id]}'");
		}
		$updateQuery = implode(',',$updateQuery);
		return $this->executeSql("UPDATE {$table} SET {$updateQuery} WHERE $where");
	}

	public function delete($table, $id){
		return $this->executeSql("DELETE FROM {$table} WHERE id = {$id}");
	}

	public function select($table, $fields, $where){
		return $this->executeSql("SELECT FROM {$table} $where id = {$id}");
	}

}

?>
