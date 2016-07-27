<?php

/**
 * Created by PhpStorm.
 * User: nestor
 * Date: 22.07.16
 * Time: 19:39
 */
#@TODO ошибка в условии проверки  пустые данные или нет надо найти в инете как правильно
class Admin extends Controller{

    function __construct(){
        $this->form_data();
    }

    function form_data(){
        $login = $_POST['login'];
        $pass = $_POST['pass'];

        
        if(isset($login,$pass) and !empty($login) and !empty($pass)){
            $this->form_enter($login,$pass);
            echo"111";
        }else{
            echo"Введите логин или пароль!!!";
        }
        
    }
}
$admin = new Admin();
?>