<?php
session_start();

ini_set('display_errors',1);
error_reporting(E_ALL ^E_NOTICE);

if($_SESSION['admin_ok']!="admin_ok"){
   header("Location: ../index.php");
}
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminRoom
 *
 * @author nestor
 */
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Админ-панель
        </title>
        <link rel="stylesheet" href="../css/bootstrap.css">
    </head>
    <body>
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="button_exit">
                        <button><?="Выход";?><?php unset($_SESSION['admin_ok']);?></button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main>
            
        </main>
        <footer>
            <script src="../js/jquery.js"></script>
            <script src="../js/main_admin.js"></script>
        </footer>
    </body>
</html>

