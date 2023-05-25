<?php
//utilizamos a notação namespace em toda classe que criarmos 
//daqui para frente. Dessa forma o autoload do composer
//vai conseguir identificar o local da sua classe 
namespace App;

use Core\Init\Bootstrap;

class Route extends Bootstrap
{

    //Função que configura as rotas disponiveis no nosso site
    public function initRoutes()
    {
        //difinição dos caminhos digitados no navegador, onde:
        //route será a url digitada
        //controller sera o controlador responsavel por abrir essa pagina
        //action será a pagina a ser aberta

        //Rotas do IndexController
        $routes['home'] = array('route' => '/', 'controller' => 'indexController', 'action'  => 'index');       
        $routes['login'] = array('route' => '/login', 'controller' =>  'indexController', 'action' => 'login');
        $routes['contato'] = array('route' => '/contato', 'controller' => 'indexController', 'action' => 'contato');

        //Rotas do AuthController
        $routes['autenticar'] = array('route' => '/autenticar', 
        'controller' => 'authController', 'action' => 'autenticar');

        //logout aparece na url e sair é a function do authcontroller
        $routes['sair'] = array('route' => '/logout', 
        'controller' => 'authController', 'action' => 'sair');

        //Rotas do UsuarioController
        $routes['usuario_salvar'] = array('route' => '/usuario_salvar', 
        'controller' => 'usuarioController', 'action' => 'salvar');
        
        $routes['usuario_cadastrar'] = array('route' => '/usuario_cadastrar', 
        'controller' => 'usuarioController', 'action' => 'cadastrar');
        
         //Rotas do Admincontroller
         $routes['admin'] = array('route' => '/admin', 
         'controller' => 'adminController', 'action' => 'index');
 

        $this->setRoutes($routes);
    }
}
