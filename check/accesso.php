<?php
        require_once 'connessioneDB.php';

        //distruzione della sessione precedente e apertura di una nuova sessione
        session_start();
        session_unset();
        session_destroy();
        session_start();

        $username = filter_input(INPUT_POST, 'username');
        $password = filter_input(INPUT_POST, 'password');
        $password = md5($password);

        $query = "SELECT * FROM utente WHERE username='$username' and password='$password'";

        $risultato = $connessione->query($query);
        $count = mysqli_num_rows($risultato);

      if($count == 1) {
         //array globale delle variabili di sessione
         $_SESSION['utente'] = $username;
         header("location: ../index.php");

          //creare messaggio di benvenuto
      }
        else {
            header("location: ../accesso_registrazione.php?error=autenticazione_fail");
            }
        $connessione->close();
?>
