<?php

class Sql {

	public $conexao;

	public function __construct(){

		return  $this->conexao = mysqli_connect("127.0.0.1", "root", "", "hcode_shop");

	}

	public function query($string_query){

		return mysqli_query($this->conexao, "$string_query");

	}

	public function __destruct(){
	
		mysqli_close($this->conexao);
	

	}
}

?>