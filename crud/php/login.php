<?php
session_start();
?>
<html>
	<head>
		<title>Crud</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
	</head>
	<body>
	  <div id="pain">
	      <div id="banner">
	      </div>
	      <div id="menu">
	      	 <ul>
	      	 	<li><a href="../index.php">Home</a></li>
	      	 	<li><a href="cadastra.php">Cadastrar</a></li>
	      	 	<li><a href="login.php">Login</a></li>
	      	 	<li><a href="sobre.php">Sobre</a></li>
	      	 </ul>
	      </div>
	   <div id="conteudo">
		<form method="POST" action="loginacess.php">
			<fieldset>
				<legend>Login</legend>
				<?php
				 if(isset($_SESSION['naoAutenticado'])){
				?>
				<div id="msg">
					<h5">ERRO: Email ou senha Inválidos</h5>
				</div>
				<?php
				unset($_SESSION['naoAutenticado']);
				}
				?>
                <input type="email" name="email" required placeholder="Digite seu Email">
                <input type="password" name="senha" required placeholder="Digite sua senha">
                <input type="submit" name="envia" value="Entrar">
          </fieldset>   
		</form>
	   </div>
	  </div>
	</body>
</html>