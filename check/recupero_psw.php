<?php
require_once '../controllers/DbManager.php';

$db_instance = new DbManager();

$username = filter_input(INPUT_POST, 'username-recupero');
$email = filter_input(INPUT_POST, 'email-recupero');

//Controllo presenza campi
/*if (!$username || !$email) {
    header("location: ../accesso_registrazione.php?error_recupero=campi_vuoti");
    die();
}*/

//Controllo utente
$controlloUtente = $db_instance->select(array('username'), 'utente', "username = '$username' and email = '$email'");
$numUtente = mysqli_num_rows($controlloUtente);


if ($numUtente == 0) {
    echo "Utente non esistente";
   /* header("location: ../accesso_registrazione.php?error_recupero=non_esistente");
    die();*/
} else {
    $result = $db_instance->select(array('username', 'email'), 'utente', "username='$username' and email='$email'")->fetch_array();
}

if (!$result) {
    echo "Errore recupero";
    /*header("location: ../accesso_registrazione.php?error_recupero");
    die();*/
} else {
    $oggetto = "Recupero password Popcorn";

    $corpo = "Clicca su http://localhost/recupero_psw.php?rec=" . md5($result['username']) . " per confermare la nuova password.";

   if (mail($result['email'], $oggetto, $corpo)) {
       echo "ok";
        //echo "Messaggio inviato con successo.";

        //echo "Inserimenti effettuati correttamente.";
        //creare messaggio di benvenuto
    } else {
        echo "Errore nessuna email inviata.";
    }

}

$db_instance->connection->close();
?>
