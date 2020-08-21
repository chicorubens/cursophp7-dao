<?php 

require_once("config.php");

//lista usuarios como objeto
// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");
// echo json_encode($usuarios);


// consulta 1 usuario
// $root = new Usuario();
// $root->loadById(11);
// echo $root;

//lista usuarios static
$lista = Usuario::getList();
echo json_encode($lista);

//lista usuario buscando pelo login
// $search = Usuario::search("a");
// echo json_encode($search);

//carrega usuario usando login e senha
/*$usuario = new Usuario();
$usuario->login("pam", "123");
echo $usuario;*/

//inseri uma tupla no banco;
// $aluno = new Usuario("Professor", "123"); //usando construtor, apenas duas linha no total
// //$aluno->setDeslogin("aluno");//sem construtor
// //$aluno->setDessenha("@lun0");//sem construtor
// $aluno->insert();
// echo $aluno;

//atualiza cadastro de tabela usuario
// $usuario = new Usuario();
// $usuario->loadById(8);
// $usuario->update("professor", "12345");

//deletar tupla de usuario
// $usuario = new Usuario();
// $usuario->loadById(8);
// $usuario->delete();
// echo $usuario;

?>