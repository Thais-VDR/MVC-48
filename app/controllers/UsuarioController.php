<?php
namespace App\controllers;

use App\controllers\AuthController;
use Core\controller\Action;
use Core\model\Container;

class UsuarioController extends Action{

//método que irá salvar no BD os dados preenchidos no formulario de cadastro
public function salvar(){

//Valida se usuário está autenticado no sistema
AuthController :: validaAutenticacao();

//1 instaciar o usuarioModel
$usuario = Container::getModel("Usuario");

//2 preencher os dados do usuario
$usuario->__set("nome",$_POST['nome']);
$usuario->__set("sobrenome",$_POST['sobrenome']);
$usuario->__set("email",$_POST['email']);
$usuario->__set("senha",md5($_POST['senha']));
$usuario->__set("nivel",isset($_POST['nivel']) ? 1 : 0);

if($usuario->validaFormulario()){
    echo("PARAMOS AQUI NO MVC - FORMULARIO VALIDADO");
}

}
//método que irá chamar o formulario de cadastro 
public function cadastrar(){
    AuthController :: validaAutenticacao();
    $this->render("cadastrar", "template_admin");
}
}

?>