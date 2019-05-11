<?php

	include_once('conexao.php');
	$id = $_GET['id'];
	$u = $pdo->prepare("DELETE FROM usuario WHERE id=$id");
	$u->execute();
	if($u->execute()){
		header('location:adm.php');
	}
?>