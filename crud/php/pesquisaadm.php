<?php
    include_once('conexao.php');
	$ps = @$_POST['pesquisar'];


	$sql = $pdo->prepare("SELECT * FROM usuario WHERE nome='$ps'");
	$sql->execute();
	$r = $sql->fetchall();
?>
	<table>
		<tr>
					<th>id</th>
					<th>nome</th>
					<th>sobrenome</th>
					<th>email</th>
					<th>registro</th>
					<th>Ações</th>
		</tr>
	<?php foreach ($r as $key => $value) { 
		            $id = $value['id'];
					$nome = $value['nome'];
					$sobrenome = $value['sobrenome'];
					$email = $value['email'];
					$registro = $value['registro'];
	?>
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