 <?php

     include("painel.php");
     include("conexao.php");
     include("crud-cliente.php");

	$veiculo = $_POST["veiculo"];
	$nome = $_POST["nome"];
     $data =$_POST["data"];
     $hora =$_POST["hora"];
    
	if(insert_Cliente($conexao,$veiculo,$nome,$data,$hora)) 
     {?>
          <h2>
               <p class="text-success"> DADOS DO CLIENTE - GRAVADO :-)</p>
          </h2>

          <br>
               <table class="table" style="text-align:left">
               <tr> 
                    <td>Nome Completo do Cliente:<?= $nome;?></td>
               </tr> 
               <tr> 
                    <td>Veiculo:<?= $veiculo;?></td>
               </tr> 
               <tr>
                    <td>Data entrada: <?=$data;?></td>
               </tr>
               <tr>
                    <td>Hora entrada: <?=$hora;?></td>
               </tr>
	<?php }
     else {
               $msg = mysqli_error($conexao);
               echo $msg;?>
               <h2>
                    <p class="text-danger">DADOS DO CLIENTE - NÃO GRAVADO :-( </p>
               </h2>
    <?php
		}
    

?>
