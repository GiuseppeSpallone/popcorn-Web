<?php
        require_once 'connessioneDB.php';

        $username = filter_input(INPUT_POST, 'username');
        $password = filter_input(INPUT_POST, 'password');
        $password = md5($password);

        $query = "SELECT * FROM utente WHERE username='$username' and password='$password'";

        $risultato = $connessione->query($query);
        $count = mysqli_num_rows($risultato);

      if($count == 1) {
          session_start();
         //array globale delle variabili di sessione
         $_SESSION['username'] = $username;
         $_SESSION['password'] = $password;
         $_SESSION['logged'] = true;

         if($username === "admin"){
             $_SESSION['private'] = true;
             //controllo dal database
         }

         header("location: ../index.php");

      }
        else {
            header("location: ../accesso_registrazione.php?error=autenticazione_fail");
            }
        $connessione->close();
?>
