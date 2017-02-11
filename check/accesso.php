<?php
require_once '../controllers/DbManager.php';

$db_instance = new DbManager();

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$password = md5($password);

$result = $db_instance->select([], 'utente', "username='$username' and password='$password'")->fetch_assoc();

if ($password == $result['password']) {
    session_start();
    session_unset();
    session_destroy();
    session_start();
    //array globale delle variabili di sessione
    $_SESSION['username'] = $result['username'];
    $_SESSION['password'] = $result['password'];
    $_SESSION['logged'] = true;
    if ($result['is_admin'] == true) {
        $_SESSION['private'] = true;
    }

    header("location: ../index.php");

} else {
    header("location: ../accesso_registrazione.php?error_accesso=accesso_non_autenticato");
    die();
}

$db_instance->connection->close();
?>
