<?php

	function insert_Cliente($conexao,$veiculo,$nome,$data,$hora){		
		$query = "INSERT INTO cadastro_veiculo (VEICULO,NOME,DATA,HORA)
		              VALUES ('{$veiculo}','{$nome}','{$data}','{$hora}')";
	    return mysqli_query($conexao,$query);
	}

	function select_Cliente($conexao){
		$listaCliente = array();
		$query = "SELECT * FROM CADASTRO_CLIENTE ORDER BY NOME";
		$resultado = mysqli_query($conexao,$query);
		
		while ($cliente = mysqli_fetch_assoc($resultado))
			  {
					array_push($listaCliente,$cliente);
			  }
		return $listaCliente;
	}

	function delete_Cliente($conexao,$veiculo_id){
		$query = "DELETE FROM CADASTRO_CLIENTE WHERE VEICULO_ID = {$veiculo_id}";
		return mysqli_query($conexao,$query);
	}

	/*function selectUpdate_Cliente($conexao,$codigo){
		$query = "SELECT * FROM CADASTRO_CLIENTE WHERE VEICULO_ID = {$codigo}";
		$resultado = mysqli_query($conexao,$query);
		return mysqli_fetch_assoc($resultado);
	}*/

	function update_Cliente($conexao,$veiculo_id,$nome,$veiculo){
		$query = "UPDATE CADASTRO_CLIENTE 
		             SET NOME = '{$nome}', 
		                 VEICULO = '{$veiculo}'
		               WHERE VEICULO_ID = '{$veiculo_id}'";
		return mysqli_query($conexao, $query);
	}

?>