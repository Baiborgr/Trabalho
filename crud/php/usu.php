<?php
 session_start();
 include('verificar_login.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Usuario Padrão</title>
	<link rel="stylesheet" type="text/css" href="../entrada.css">
</head>
<body>
	<div id="pai">
		<div id="header">
			<a href="logout.php"><img src="../img/sair.png"></a>
			<p>__ Bem Vindo Usuario ;) __</p>
			<form id="pesquisar" method="POST">
			   <input type="text" name="pesquisar" class="ps">
			   <input type="submit"  value="P" id="envia">
		    </form>
		     <div class="clear"></div>
		</div>
		<div id="conteudo">
			<div class="slide islide">
				<div>
					<img src="../img/1.png">
				</div>
				</div>
				<div id="menu">
					<ul>
						<li>Postagens</li>
						<li>Galeria</li>
						<li>Ideia</li>
						<li>Sobre</li>
					</ul>

					<div id="postagens">
						<div class="card">
							
						</div>
					</div>
				</div>
				<div class="clear"></div>
		</div>
		</div>
	</div>
	<script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
	  <script type="text/javascript" src="../js/app.js"></script>
</body>
</html>