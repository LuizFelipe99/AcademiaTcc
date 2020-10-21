
<!DOCTYPE html>
<html>
<head>
  
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
	<title>TCC</title>
</head>
<link rel="stylesheet" type="text/css" href="estilo/lateralMenu.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


<!-- The sidebar -->
<div class="sidebar">
<?php
//VERIFICA A SESSAO DO USUARIO E EXIBE NO PAINEL
    session_start();
      if((!isset ($_SESSION['loginUsuario']) == false) AND (!isset ($_SESSION['nivelUsuario']) == false) ){
        $usuario = $_SESSION['loginUsuario'];
        $nivel = $_SESSION['nivelUsuario'];
      }else{
        unset($_SESSION['loginUsuario']);
        unset($_SESSION['nivelUsuario']);
      }

      
    ?>
  <a href="home.php" class="active">Bem-Vindo(a)<br>
    <?php 
      echo '<b>'.$usuario.'</b></br>';
      echo 'Nível - '.$nivel;
    ?>

</a>
  <a href="./aluno.php">ALUNOS</a>
  <a href="personalPanel.php">PERSONAL</a>
  <a href="#about">NUTRICIONISTA</a>
  <a href="#FICHA">FICHA</a>
  <a href="controle/logout.php">LOGOUT</a>
</div>


</body>

</html>