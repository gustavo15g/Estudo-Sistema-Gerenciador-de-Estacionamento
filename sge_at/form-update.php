<?php 

     include("painel.php");
     include("conexao.php");
     include("crud-cliente.php");

      $veiculo_id = $_GET['ID'];
      $cliente = selectUpdate_Cliente($conexao,$veiculo_id);
?>

	<h1>DADOS DO CLIENTE</h1>

		<form action="update-cliente.php" method="post">
      
      <table class="table">
				<tr>
          			<td>Nome Completo do Cliente:</td>  
        			<td> 
        				<input class="form-control" type="text" placeholder="EX.: ROBERTO CARLOS DA SILVA DIAS" name="nome" value="<?=$cliente['NOME']?>"autofocus/><br/>
        			</td>
        		</tr>
				<tr>
          			<td>Veiculo do Cliente:</td>  
        			<td> 
        				<input class="form-control" type="text" placeholder="EX.: robertocarlos@robertocarlos.com.br" name="email" value="<?=$cliente['veiculo']?>"/><br/>
        			</td>
        		</tr>
            
            <input type="hidden" name="veiculo_id" value="<?=$cliente['veiculo_id']?>"/>


				<tr>
		  			<td><input class="btn btn-light" type="submit" value="ATUALIZAR"/>
          			</td>
          			<td></td>
				</tr>
      		</table>


    	</form>
    	
