<?php
session_start();
ini_set('display_errors',1);
error_reporting(E_ALL ^E_NOTICE);
/**
 * Created by PhpStorm.
 * User: nestor
 * Date: 22.07.16
 * Time: 19:39
 */

class Admin{
    protected $login;
    protected $pass;
    protected $admin_enter;
            
    function __construct() {
        $this->form_data();
    }
    
    
   /*получаем данные с ява скрипта для авторизации*/
    function form_data(){
        $this->login = $_POST['login'];
        $this->pass = $_POST['pass'];
       if(isset($this->login)and isset($this->pass) and !empty($this->login) and !empty($this->pass)){
           require_once '../model/Admin.php';
           $this->admin_enter = $admin_model->select_admin($this->login,$this->pass);
           $this->admin_true();
         }else{
            echo"Введите логин или пароль!!!";
        }
        
    }
    
    /*Функция отвечает за то что бы сверить данные 
     * те что ввели и те что в базе (логин и пароль)*/
    function admin_true(){
        foreach ($this->admin_enter as $data){
            
            if($this->login == $data['login'] and crypt($this->pass, base64_encode($this->pass)) == $data['pass']){
                $_SESSION['admin_ok'] = "admin_ok";
                echo"ok";
                
            }elseif($this->login ==" "  or crypt($this->pass, base64_encode($this->pass)) ==" ") {
                echo"Please enter your password!";
            }elseif ($this->login != $data['login'] or crypt($this->pass, base64_encode($this->pass)) != $data['pass']){
                echo "Wrong password!!!";
            }
            
        }
    
    }
}

$admin_controller = new Admin();


