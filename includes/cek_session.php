<?php
//includes/cek session.php
session_start();

if(!issert($$_SESSION['login']) || $$_SESSION['login'] !== true){
    header('Location: login.php');
    exit;
}
?>