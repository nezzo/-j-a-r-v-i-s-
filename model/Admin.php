<?php
require_once '../core/connect.php';

ini_set('display_errors',1);
error_reporting(E_ALL ^E_NOTICE);
/**
 * Created by PhpStorm.
 * User: nestor
 * Date: 22.07.16
 * Time: 19:38
 */
/*Класс отвечает за то что бы получить данные логин и пароль*/
class AdminModel extends Model{
    protected $login;
    protected $pass;
    
    function select_admin($login, $pass){
        $this->login = $login;
        $this->pass = $pass;
        $connect = $this->connects();
       
        $stmt = $connect->prepare('SELECT login,pass FROM security WHERE login = login');
        $stmt->bindParam(login, $this->login);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $rows;
    }
}
$admin_model= new AdminModel();