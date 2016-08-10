<?php
require_once 'connect.php';

ini_set('display_errors',1);
error_reporting(E_ALL ^E_NOTICE);


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
       
    function __construct() {
        $this->connects();
    }
    
    function connects(){
       $connect = new PDO("mysql:host=$this->host;dbname=$this->bd_name", $this->login_bd, $this->pass_bd);
        
       if (!$connect){
           echo "Error server";
       }else{
           return $connect;
       }

    }
    

}
$model = new Model();
