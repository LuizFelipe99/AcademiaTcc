
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>TCC</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">

	<link rel="stylesheet" type="text/css" href="../estilo/estilo.css">
</head>
<body>


<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="cardCreate">
			<div class="card-header">
				<h3 style="text-align: center;" >Cadastro de Usuário</h3>

			</div>
			<div class="card-body">
				<form method="POST" action="../controle/createUsuario.php" >
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Usuário" name="loginUsuario">						
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Nome Completo" name="nomeUsuario">						
					</div>
					<!-- campo de senha -->
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="*****" name="senhaUsuario">
					</div>
					<!-- fim do campo de senha -->
					<!-- campo de email -->
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-envelope"></i></span>
						</div>
						<input type="email" class="form-control" placeholder="academia@gmail.com" name="emailUsuario">
					</div>
					<!-- fim do campo de email -->

					<!-- começo do campo nivel -->
					<div class="input-group form-group">
						
						<select id="selectNivel" name="nivelUsuario" class="form-control">
							<option selected>NÍVEL</option>
							<option>1 - ADMINISTRADOR</option>
							<option>2 - PERSONAL</option>
							<option>3 - ALUNO</option>
						</select>
					</div>

					<!-- fim do campo nivel -->


					<!-- botao cadastrar -->
					<div class="form-group">
						<input type="submit" value="Cadastrar" class="btn float-left login_btn">
						<a href="../index.php"><input type="button" value="Voltar" class=" float-right btn btn-danger"></a>
					</div>
					
					<!-- fim do botao de cadastrar -->
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>