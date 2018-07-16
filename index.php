<?php

	require_once("config.php");
	/*
	$sql = new Sql();

	$usuarios = $sql->select("SELECT * FROM tb_usuarios");

	echo json_encode($usuarios);

	*/
	//Carrega Um usuário
	$teste1 = new Usuario();
	$teste1 -> loadByID(1);

	echo $teste1;

	echo "<br>";

	//Carrega uma lista de Usuários

	$lista = Usuario::getList();
	
	echo json_encode($lista);
	echo "<hr>";

	$busca = Usuario::search("Ganço");

	echo "<br> Buscando por Ganço: ";
	echo json_encode($busca);

	//carrega um usuário usando o login e a senha
	
	$usuario = new Usuario();
	$usuario->login("Antonio","ASDR");
	echo "<br> Testando o Login: ";
	echo $usuario;


	//Fazendo um insert de um usuario novo

	echo "<br>";

	$aluno = new Usuario("aluno","@lun0s");

	$aluno->insert();

	echo $aluno;
	



?>