<?php 

namespace app;
use SON\init\Bootstrap;

class Init extends Bootstrap {

    protected function initRoutes(){
        $route['home'] = [
            'route' => 'home',
            'controller'=>'index',
            'action'=>'index'
        ];

        $route['empresa'] = [
            'route' => 'empresa',
            'controller'=>'index',
            'action'=>'empresa'
        ];

        $this->setRoutes($route);
    }

    public static function getDb(){
        $db = new \PDO("mysql:host=localhost;dbname=mvc","root","");
        return $db;
    }
}