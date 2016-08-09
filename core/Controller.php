<?php
require_once "../connect.php";
/**
 * Created by PhpStorm.
 * User: nestor
 * Date: 22.07.16
 * Time: 17:41
 */

namespace core;

class Controller
{
    protected $login;
    protected $pass;
            
    function __construct(){
     $admin = new model\Admin();
     $admin->select_admin($this->login,$this->pass);
                
    }
    
    /*Передаем данные в модель Админ*/
    function enter_form($login,$pass){
        $this->login = $login;
        $this->pass = $pass;
    }
         
}

$controller = new Controller();
