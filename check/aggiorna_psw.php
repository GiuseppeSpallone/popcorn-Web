<?php
require_once __DIR__ . '/../controllers/DbManager.php';
require_once __DIR__ . '/../controllers/SessionManager.php';

$db_instance = new DbManager();

$username = $_POST['rec'];

$resultUtenti = $db_instance->select(array('username'), 'utente');

while($row = $resultUtenti->fetch_assoc()){
    if($username == md5($row['username'])){
        $utente = $row['username'];
        break;
    }
}

$password = filter_input(INPUT_POST, 'nuova-password');
$password2 = filter_input(INPUT_POST, 'conferma-nuova-password');

//Cripta la password
$password = md5($password);

$result = $db_instance->update('utente', "password = '$password'", "username= '$utente'");

if (!$result) {
    session_unset();
    session_destroy();
    echo "Errore aggiornamento";
} else {
    session_unset();
    session_destroy();
    $email = $db_instance->select(array('email'), 'utente', "username = '$utente'")->fetch_assoc();

    $oggetto = "Nuova password Popcorn";

    $corpo = '<html>
                  <head>
  
                  </head>
                  <body>
                      <img src="https://cldup.com/1AYvlq29Z3.png">
                      <h1> La password è stata cambiata </h1>
                  </body>
                  </html>';
    $html = "MIME-Version: 1.0\r\n";
    $html .= "Content-type: text/html; charset=iso-8859-1\r\n";

    if (mail($email['email'], $oggetto, $corpo, $html)) {
        //echo "Messaggio inviato con successo.";
        echo "ok";
        //echo "Inserimenti effettuati correttamente.";
        //creare messaggio di benvenuto
    } else {
        echo "Errore nessuna email inviata.";
    }

}
$db_instance->connection->close();

?>