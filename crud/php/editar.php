<?php
	include_once('conexao.php');
	$id = @$_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Editar</title>
	<link rel="stylesheet" type="text/css" href="../entrada.css">
</head>
<body>
	<div id="pai">
		<div id="header">
			<p style="padding-bottom: 10px;">__ O que você deseja editar :) __</p>
			<div class="clear"></div>
		</div>
		<div id="conteudo" class="editar">
			<div id="box">
		<form method="POST" autocomplete="off">
			<fieldset>
				<legend>Alterar</legend>
			           <input type="text" name="nome" placeholder="Deseja editar Nome" required><br>
				       <input type="text" name="sobre" placeholder="Deseja editar Sobre" required><br>
				       <input type="email" name="email" placeholder="Deseja editar Email" required><br>
				<input type="submit" name="envia" value="Alterar">
				<input type="reset" name="sair" value="Cancelar" onclick="ir()">
			</fieldset>
			<?php
			    if(isset($_POST['envia'])){
			    $nome = $_POST['nome'];
			    $sobre = $_POST['sobre'];
			    $email = $_POST['email'];
				$sql = $pdo->prepare("UPDATE `usuario` SET nome='$nome',sobrenome='$sobre',email='$email' WHERE id=$id ");
				$sql->execute();
				header('location:adm.php');
			}

			?>
		</form>
         </div>
		</div>
	</div>
	<script type="text/javascript">
		function ir(){
			window.location.href = "adm.php";
		}
	</script>
</body>
</html>