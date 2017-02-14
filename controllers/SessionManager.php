<?php
session_start();

$is_logged = (isset($_SESSION) && isset($_SESSION['logged']))?true:false;
$is_authorized = (isset($_SESSION) && isset($_SESSION['private']))?true:false;
$username = ($is_logged)?$_SESSION['username']:'';
$username_recupero_psw = $_SESSION['recupero'];
$titolo_film = $_SESSION['film'];
$id__orari = $_SESSION['orari'];
$id__sale =  $_SESSION['sale'];
?>