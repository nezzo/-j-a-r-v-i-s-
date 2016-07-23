<?php

/**
 * Created by PhpStorm.
 * User: nestor
 * Date: 22.07.16
 * Time: 17:40
 */
class Model
{
    protected $login = 'root';
    protected $pass = 1111111;
    protected $host = 'localhost';
    protected $bd_name = 'jarvis';

    function __construct(){
        try {
            $connect = new PDO("mysql:host=$this->host;dbname=$this->bd_name", $this->login, $this->pass);
        } catch (PDOException $e) {
            echo 'Подключение не удалось'; //. $e->getMessage();
        }

    }

}
