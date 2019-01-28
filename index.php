<?php

require_once("config.php");

/*===============================================================================*/
/*SELECT SIMPLES*/
/*$sql = new Sql();																

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

/*carrega um usuário*/

//$root = new Usuario();

//$root->loadbyId(3);

//echo $root;

/*===============================================================================*/
/* CARREGA UMA LISTA DE USUARIOS*/

/*$lista = Usuario:: getList();

echo json_encode($lista);*/
/*===============================================================================*/
/*CARREGA UMA LISTA DE USUÁRIOS BUSCANDO PELO LOGIN*/

//$search = Usuario::search("jo");

//echo json_encode($search);

/*===============================================================================*/
/* CARREGAR USUÁRIO USANDO LOGIN E SENHA*/

/*$usuario = new Usuario();
$usuario ->login("jose",'1234567890');

echo $usuario;*/
/*===============================================================================*/
/*insert de usuario novo*/

/*$aluno = new Usuario("gib","gordo");

$aluno->insert();

echo $aluno;*/

/*===============================================================================*/
/*update na base*/

$usuario =  new Usuario();

$usuario->loadById(7);

$usuario->update("melgibson","@@@");

echo $usuario;



?>