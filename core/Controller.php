<?php

/**
 * Created by PhpStorm.
 * User: nestor
 * Date: 22.07.16
 * Time: 17:41
 */
class Controller
{
    public $model;

    function __construct(){
      $this->model = new Model();

        echo"111";

    }
}