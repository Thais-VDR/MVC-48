<?php

namespace App\Controllers;
//contrala tudo referente as paginas de login
//os recursos do miniframework
use Core\Controller\Action;
use Core\Model\Container;

class AuthController extends Action
{

	
	public function autenticar()
	{
		///aqui sera o norteador dos erros
        
        
		//md5: 
		//variavel que recebe o usuaria
		$usuario = Container::getModel('Usuario');
		$usuario->__set('email', $_POST['email']);
		$usuario->__set('senha', md5($_POST['senha'])); //ja seria a senha em si 

		
		$usuario->autenticar();

		

		if ($usuario->__get('id') != '' && $usuario->__get('nome')) {
			session_start();
			$_SESSION['id'] = $usuario->__get('id');
			$_SESSION['nome'] = $usuario->__get('nome');
			$_SESSION['sobrenome'] = $usuario->__get('sobrenome');
			$_SESSION['nivel'] = $usuario->__get('nivel');
			$_SESSION['email'] = $usuario->__get('email');
			$_SESSION['imagem'] = $usuario->__get('imagem');

			header('Location: /admin');
		} else {
			header('Location: /login?error=401');
		}
	}

	// importantes

	public static function validaAutenticacao()
	{

		if (session_status() !== PHP_SESSION_ACTIVE) {
			session_start();
		}

		if (!isset($_SESSION['id']) || $_SESSION['id'] == '' || !isset($_SESSION['nome']) || $_SESSION['nome'] == '') {
			header('Location: /login?erro=403');
		}
	}
//  ajuda a não ter repetição dos comandos 
	public static function esta_logado()
	{
		if (session_status() !== PHP_SESSION_ACTIVE) {
			session_start();
		}

		$logado = true;

		if (!isset($_SESSION['id']) || $_SESSION['id'] == '' || !isset($_SESSION['nome']) || $_SESSION['nome'] == '') {
			$logado = false;
		}

		return $logado;
	}

	public function sair()
	{
		session_start();
		session_destroy();
		header('Location: /');
	}
}
