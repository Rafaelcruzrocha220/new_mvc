<?php 

namespace app\controllers;

use SON\controllers\action;
use app\models\artigo;
use SON\Di\Container;


class Index extends Action{

    public function index(){
        $artigo = Container::getClass('artigos');
        $artigos = $artigo->fetchAll();

        $this->views->artigos = $artigos;
        $this->render('index');
    }

    public function empresa(){
        $this->render('empresa');
    }
    
}
