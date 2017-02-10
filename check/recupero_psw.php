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
$controlloUsername = $db_instance->select(array('username'), 'utente', "username = '$username'");
$numUsername = mysqli_num_rows($controlloUsername);

$controlloMail = $db_instance->select(array('email'), 'utente', "email = '$email'");
$numMail = mysqli_num_rows($controlloMail);

if ($numUsername == 0) {
    header("location: ../accesso_registrazione.php?error_recupero=username_non_esistente");
    die();
} else if ($numMail == 0) {
    header("location: ../accesso_registrazione.php?error_recupero=email_non_esistente");
    die();
} else {
    $result = $db_instance->select(array('password'), 'utente', "username='$username' and email='$email'")->fetch_array();

    $hash = $result['password'];

}

if (!$result) {
    header("location: ../accesso_registrazione?error_recupero.php");
    die();
} else {
    $oggetto = "Recupero password Popcorn";

    $corpo = "Clicca su http://localhost/recupero_psw.php per confermare la nuova password.";

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
