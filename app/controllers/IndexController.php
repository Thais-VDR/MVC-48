<?php

namespace App\controllers;

use Core\controller\Action;

class IndexController extends Action
{
    public function index()
    {
        $this->render("index", "template_front1");
    }

    public function contato()
    {
        $this->render("contato", "template_front2");
    }

    public function login()
    {
         //verificação de fazer um if, se existir o palavra da url login ele passa se não é vazio
        $this->view->login = isset($_GET['error']) ? $_GET['error'] : '';
        $this->render("login", "template_front2");
    }
}
