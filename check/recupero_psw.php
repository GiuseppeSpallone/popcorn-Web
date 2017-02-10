<?php
require_once '../controllers/DbManager.php';

$db_instance = new DbManager();

$username = filter_input(INPUT_POST, 'username-recupero');
$email = filter_input(INPUT_POST, 'email-recupero');

//Controllo presenza campi
if (!$username || !$email) {
    header("location: ../accesso_registrazione.php?error_recupero=campi_vuoti");
    die();
}

//Controllo utente
$controlloUsername = $db_instance->select(array('username'), 'utente', "username = '$username' and email = '$email'");
$numUsername = mysqli_num_rows($controlloUsername);


if ($numUsername == 0) {
    header("location: ../accesso_registrazione.php?error_recupero=non_esistente");
    die();
} else {
    $result = $db_instance->select(array('email'), 'utente', "username='$username' and email='$email'")->fetch_array();

    $hash = $result['email'];
}

if (!$result) {
    header("location: ../accesso_registrazione.php?error_recupero");
    die();
} else {
    $oggetto = "Recupero password Popcorn";

    $corpo = "Clicca su http://localhost/recupero_psw.php?utente=" . $hash . " per confermare la nuova password.";

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
