<?php
    session_start();
$_SESSION['login'] = $_GET['login'];
return header('Location: index.php');