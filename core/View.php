<?php
 #TODO  надо придумать  как выводить данные  и передавать в контроллер с вида

/**
 * Created by PhpStorm.
 * User: nestor
 * Date: 22.07.16
 * Time: 17:41
 */
class View
{
    public $controller;
    function __consturct(){
        $this->controller = new Controller;

    }


}
$view = new View();
