 <?php

     include("painel.php");
     include("conexao.php");
     include("crud-cliente.php");

  $codigo = $_POST["veiculo_id"];
  $nome = $_POST["nome"];
  $veiculo = $_POST["veiculo"];
  $data = $_POST["data"];
  $hora =$_POST["hora"];

  if(update_Cliente($conexao,$codigo,$nome,$veiculo,$data,$hora)) 
     {?>
          <h2>
               <p class="text-success"> DADOS DO CLIENTE - ATUALIZADO :-)</p>
          </h2>

          <br>
               <table class="table" style="text-align:left">
               <tr> 
                    <td>Nome Completo do Cliente:<?= $nome;?></td>
               </tr> 
               <tr> 
                    <td>Veiculo do Cliente:<?= $veiculo;?></td>
               </tr>
                <tr> 
                    <td>Data do Cliente:<?= $data;?></td>
               </tr> 
                <tr> 
                    <td>Hora do Cliente:<?= $hora;?></td>
               </tr>  



  <?php }
     else {
               $msg = mysqli_error($conexao);
               echo $msg;?>
               <h2>
                    <p class="text-danger">DADOS DO CLIENTE - NÃO ATUALIZADO :-( </p>
               </h2>
    <?php
    }
    ?>
