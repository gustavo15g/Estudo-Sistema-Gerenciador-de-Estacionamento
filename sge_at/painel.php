<?php
session_start();
//include('verifica_login.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Painel de Controle</title>
    <link rel="icon" href="img\logo.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/painelcss.css">

</head>
<body>

        <form action="insert-cliente.php" method="post">
         <table>

                        <tr>
                            <td> Nome Proprietario:</td>
                            <td>
                            <input type="text" name="nome" placeholder="EX:.Ronaldo Pereira Reis">
                            </td>
                        </tr>  


                        <tr>    
                            <td> Veiculo:</td>
                            <td>
                            <input type="text" name="veiculo" placeholder="EX:.Palio - Fiat">
                            </td>
                        </tr>


                        <tr>  
                            <td>Data:</td>
                            <td>
                            <input type="text" name="data" placeholder="EX:.2020/06/15">
                            </td>

                        </tr>

                         <tr>  
                            <td>Hora:</td>
                            <td>
                            <input type="text" name="hora" placeholder="EX:.12:00">
                            </td>

                        </tr>    
  <td>    
  <br>
  <br> 
  <ol>
<button  type="submit"  value="salvar">Salvar</button>
<input type="button" onclick="location.href='logout.php';" value="Sair" />
<input type="button" onclick="location.href='select-cliente.php';" value="Selecionar" />
<input type="button" onclick="location.href='form-update.php';" value="Atualizar" />
<input type="button" onclick="location.href=' ';" value="Receber" colo = #C0C0C0 />
</ol>    
</td>

</table>
</form> 
</body>
</html>