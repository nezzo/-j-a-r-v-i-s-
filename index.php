<?php
    require_once('connect.php');
?>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>JARVIS</title>
    <link href="http://localhost/jarvis/css/style_enter.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="welcom">
        <p>Добро пожаловать!</p>
    </div>
</header>
<main>
    <div class="form">
        <?php require_once('view/Admin.php');?>
    </div>
</main>
<footer>
</footer>
</body>
</html>