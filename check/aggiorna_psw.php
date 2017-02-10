<?php
require_once __DIR__ . '/../controllers/DbManager.php';

//$email = $_REQUEST['utente'];

$db_instance = new DbManager();

$password = filter_input(INPUT_POST, 'nuova-password');
$password2 = filter_input(INPUT_POST, 'conferma-nuova-password');

$recupero_username = $_REQUEST['utente'];

//Controllo presenza campi
if (!$password || !$password2) {
    //header("location: ../accesso_registrazione.php?error_registrazione=campi_vuoti");
    die("error 1");
}

//Controllo coincidenza password
if ($password != $password2) {
    //header("location: ../accesso_registrazione.php?error_registrazione=psw_non_coincidenti");
    die("error 2");
}

//Cripta la password
$password = md5($password);

$result = $db_instance->update('utente', "password = '$password'", "username = 'giuseppe'");

if (!$result) {
    //header("location: ../accesso_registrazione?error_registrazione.php");
    die("error 3");
} else {
    $oggetto = "Nuova password Popcorn";
    $corpo = "La password è stata cambiata ";

    if (mail('giuseppe.spallone95@gmail.com', $oggetto, $corpo)) {
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