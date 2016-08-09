<?php
require_once "../connect.php";

/**
 * Created by PhpStorm.
 * User: nestor
 * Date: 22.07.16
 * Time: 19:39
 */
namespace controller;

class Admin extends core\Controller{
    public $login;
    public $pass;
    
    function __construct() {
        $this->form_data();
    }
    
    /*получаем данные с ява скрипта для авторизации*/
    function form_data(){
        $this->login = $_POST['login'];
        $this->pass = $_POST['pass'];
       if(isset($this->login)and isset($this->pass) and !empty($this->login) and !empty($this->pass)){
           parent::enter_form($this->login,$this->pass);
        }else{
            echo"Введите логин или пароль!!!";
        }
        
    }
}
$admin = new Admin();
?>