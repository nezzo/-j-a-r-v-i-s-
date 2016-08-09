<?php
require_once "../connect.php";
namespace core;
/**
 * Created by PhpStorm.
 * User: nestor
 * Date: 22.07.16
 * Time: 17:40
 */
class Model
{
    protected $login_bd = 'root';
    protected $pass_bd = 1111111;
    protected $host = 'localhost';
    protected $bd_name = 'jarvis';
    public $connect;

    function __construct(){
        try {
            $thic->connect = new PDO("mysql:host=$this->host;dbname=$this->bd_name", $this->login_bd, $this->pass_bd);
        } catch (PDOException $e) {
            echo 'Подключение не удалось'; //. $e->getMessage();
        }

    }

}

$model = new Model();
