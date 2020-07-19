<?php 
	
     include("painel.php");
     include("conexao.php");
     include("crud-cliente.php");

	$codigo = $_POST['ID'];
	delete_Cliente($conexao,$codigo);
	header("Location: select-cliente.php?removido=true");
	die();

?>