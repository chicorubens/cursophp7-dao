<?php 

require_once("config.php");

// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");
// echo json_encode($usuarios);


// consulta 1 usuario
// $root = new Usuario();
// $root->loadById(2);
// echo $root;

//lista usuarios
// $lista = Usuario::getList();
// echo json_encode($lista);

//lista usuario buscando pelo login
// $search = Usuario::search("a");
// echo json_encode($search);

//carrega usuario usando login e senha
/*$usuario = new Usuario();
$usuario->login("pam", "123");
echo $usuario;*/

//inseri uma tupla no banco;
// $aluno = new Usuario("aluno", "@lun0"); //usando construtor, apenas duas linha no total
// //$aluno->setDeslogin("aluno");//sem construtor
// //$aluno->setDessenha("@lun0");//sem construtor
// $aluno->insert();
// echo $aluno;

//atualiza cadastro de tabela usuario
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor", "12345");

?>