<?php
require_once '../controllers/DbManager.php';

$db_instance = new DbManager();

$username = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$password2 = filter_input(INPUT_POST, 'confirm-password');

//Controllo presenza campi
if (!$username || !$email || !$password || !$password2) {
    header("location: ../accesso_registrazione.php?error_registrazione=campi_vuoti");
    die();
}

//Controllo coincidenza password
if ($password != $password2) {
    header("location: ../accesso_registrazione.php?error_registrazione=psw_non_coincidenti");
    die();
}

//Cripta la password
$password = md5($password);

//Controllo username
$controlloUsername = $db_instance->select(array('username'), 'utente', "username = '$username'");
$numUsername = mysqli_num_rows($controlloUsername);
if ($numUsername == 0) {
    $result = $db_instance->insert('utente', array('username', 'email', 'password'), array($username, $email, $password));
} else {
    header("location: ../accesso_registrazione.php?error_registrazione=username_esistente");
    die();
}

if (!$result) {
    header("location: ../accesso_registrazione?error_registrazione.php");
    die();
} else {
    header("location: ../index.php");
    //echo "Inserimenti effettuati correttamente.";
    //creare messaggio di benvenuto
}

$db_instance->connection->close();
?>
