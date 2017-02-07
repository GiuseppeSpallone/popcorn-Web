<?php
/**
 * Created by PhpStorm.
 * User: Giuseppe
 * Date: 07/02/2017
 * Time: 10:43
 */
session_start();

$is_logged = (isset($_SESSION) && isset($_SESSION['logged']))?true:false;
$username = ($is_logged)?$_SESSION['username']:'';
