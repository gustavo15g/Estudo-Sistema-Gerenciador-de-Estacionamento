 <?php

     include("painel.php");
     include("conexao.php");
     include("crud-cliente.php");
?>

	<h1>LISTA DE CLIENTE</h1>

		<table class="table table-striped table-bordered">
			<tr>
				<th> Código </th>
				<th> Nome </th>
				<th> Veiculo </th>
				<th> Data </th>
				<th> Hora </th>
			</tr>

	<?php
		$listaClientes = select_Cliente($conexao);
		foreach ($listaClientes as $cliente) :
	?>
		<tr>
			<td><?= $cliente['VEICULO_ID'] ?></td>
			<td><?= $cliente['NOME'] ?></td>
			<td><?= $cliente['VEICULO'] ?></td>
			<td><a class = "btn btn-warning" href="form-update.php?ID=<?=$cliente['VEICULO_ID']?>">Editar</a></td>
			<td>
				<form action="delete-Cliente.php" method = "post">
					<input type="hidden" name="ID" value="<?=$cadastro_cliente['CODIGO']?>">
					<button class="btn btn-danger">Excluir</button> 
				</form>
			</td>

		</tr>
	<?php
		endforeach
	?>
</table>

	<?php
		if(array_key_exists("removido", $_GET) && $_GET["removido"]=="true") {
	?>
		<h2><p class="text-success"> DADOS DO CLIENTE - EXCLUIDO</p></h2>
	<?php
		}
	?>

