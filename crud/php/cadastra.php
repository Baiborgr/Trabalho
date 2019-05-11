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
		<form method="POST" autocomplete="off">
			<fieldset>
				<legend>Cadastrar</legend>
			           <input type="text" name="nome" required placeholder="Digite seu Nome."><br>
				       <input type="text" name="sobre" required placeholder="Digite seu Sobre."><br>
				       <input type="email" name="email" required placeholder="Digite seu Email."><br>
				       <input type="password" name="senha" required placeholder="Digite seu Senha."><br>
				<input type="submit" name="envia" value="Cadastrar">
			</fieldset>
			<?php
			include_once('conexao.php');
			date_default_timezone_set('America/Sao_Paulo');
			  if(isset($_POST['envia'])){
			  		$nome = $_POST['nome'];
			  		$sobre = $_POST['sobre'];
			  		$email = $_POST['email'];
			  		$senha = $_POST['senha'];
			  		$registro = date('Y-m-d H:i:s');
			  		$sql = $pdo->prepare("INSERT INTO `usuario` VALUES (null,?,?,?,?,?)");
			  		$sql->execute(array($nome,$sobre,$email,$senha,$registro));
			  		echo '<div id="messagem"z onclick="a()"><img src="../img/icone.png">cadastrado com sucesso...
			  		     </div>';
			  }
			?>
			<script type="text/javascript">
				function a() {
					window.location.href = "login.php";

				}
			</script>
		</form>
	   </div>
	  </div>
	</body>
</html>