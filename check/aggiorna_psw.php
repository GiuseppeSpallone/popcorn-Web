<?php
require_once __DIR__ . '/../controllers/DbManager.php';

$email = $_REQUEST['utente'];

$db_instance = new DbManager();

$password = filter_input(INPUT_POST, 'nuova-password');
$password2 = filter_input(INPUT_POST, 'conferma-nuova-password');

$recupero_username = $_REQUEST['utente'];

//Controllo presenza campi
if (!$password || !$password2) {
    header("location: ../recupero_psw.php?error_recupero=campi_vuoti");
    die();
}

//Controllo coincidenza password
if ($password != $password2) {
    header("location: ../recupero_psw.php?error_recupero=psw_non_coincidenti");
    die();
}

//Cripta la password
$password = md5($password);

$result = $db_instance->update('utente', "password = '$password'", "email= '$email'");

if (!$result) {
    header("location: ../recupero_psw.php?error_registrazione");
    die();
} else {
    $oggetto = "Nuova password Popcorn";
    $corpo = "La password è stata cambiata ";

    if (mail($email, $oggetto, $corpo)) {
        //echo "Messaggio inviato con successo.";
        header("location: ../accesso_registrazione.php");
        //echo "Inserimenti effettuati correttamente.";
        //creare messaggio di benvenuto
    } else {
        //echo "Errore. Nessun messaggio inviato.";
    }
}

$db_instance->connection->close();

?>