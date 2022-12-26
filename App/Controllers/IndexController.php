<?php

namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;
use App\Models\Produto;
use App\Models\Info;

class IndexController extends Action {



    public function index(){

        //Instancia e já faz a conexão
        $produto = Container::getModel('produto');
    
        $produtos = $produto->getProdutos();
        $this->view->dados = $produtos;
        
        $this->render('index', 'layout1');
    }

    public function sobreNos(){
        
        //Instancia e já faz a conexão
        $info = Container::getModel('info');

        $informacoes = $info->getInfo();

        $this->view->dados = $informacoes;
        $this->render('sobre-nos', 'layout1');
    }


}