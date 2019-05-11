<?php
	include_once('conexao.php');
	$sql = $pdo->prepare('SELECT * FROM usuario');
	$sql->execute();
	$infor = $sql->fetchall();
?>
<!DOCTYPE html>
<html>
<head>
	<title>adm</title>
	<link rel="stylesheet" type="text/css" href="../entrada.css">
</head>
<body>
	<div id="pai">
		<div id="header">
			<a href="../index.php"><img src="../img/sair.png"></a>
			<p>__ Bem vindo Caro admin :) __</p>
			<form id="pesquisar" method="POST" action="adm.php">
			   <input type="text" name="pesquisar" class="ps">
			   <input type="submit"  value="P" id="envia">
		    </form>
		     <div class="clear"></div>
		</div>
		<div id="conteudo">
			<?php include_once('pesquisaadm.php'); ?>
			<table>
				<tr>
					<th>id</th>
					<th>nome</th>
					<th>sobrenome</th>
					<th>email</th>
					<th>registro</th>
					<th>Ações</th>
				</tr>
				<?php foreach ($infor as $key => $value) { 
					$id = $value['id'];
					$nome = $value['nome'];
					$sobrenome = $value['sobrenome'];
					$email = $value['email'];
					$registro = $value['registro']; ?>

				<tr>
					<td><?php echo $id; ?></td>
					<td><?php echo $nome; ?></td>
					<td><?php echo $sobrenome; ?></td>
					<td><?php echo $email; ?></td>
					<td><?php echo $registro; ?></td>
					<td><a href="editar.php?id=<?php echo $id;?>"><button>Alterar</button></a>
						<a href="excluir.php?id=<?php echo $id;?>"><button>Excluir</button></a>
					</td>
				<tr>
				<?php } ?>
			</table>
		</div>
	</div>
	<script type="text/javascript"></script>
</body>
</html>