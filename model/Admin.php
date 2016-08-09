<?php
require_once "../connect.php";
/**
 * Created by PhpStorm.
 * User: nestor
 * Date: 22.07.16
 * Time: 19:38
 */
namespace model;

class Admin extends core\Model{
    protected $login;
    protected $pass;
    
    function select_admin($login, $pass){
        $this->login = $login;
        $this->pass = $pass;
        $connect = $this->connect;
        
        $stm = $connect->prepare('SELECT login,pass FROM security WHERE login = login');
        $stmt->bindParam(login, $login);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo"$rows";
        
    }
    
}
