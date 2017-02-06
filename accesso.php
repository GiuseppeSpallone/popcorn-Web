<hmtl>

    <body>
        <?php
        require_once 'connessioneDB.php';

        //distruzione della sessione precedente e
        //apertura di una nuova sessione
        session_start();
        session_unset();
        session_destroy();
        session_start();

        $username = filter_input(INPUT_POST, 'username');
        $password = filter_input(INPUT_POST, 'password');
        //$password = md5($password);

        $sql = "SELECT * FROM utente WHERE username='$username' and password='$password'";

        $result = $connessione->query($sql);

        $count = mysqli_num_rows($result);

      if($count == 1) {
         //array globale delle variabili di sessione
         $_SESSION['utenti'] = $username;
         header("location: index.html");

          //creare messaggio di benvenuto
      }
        else {
          header("location: accesso.html");

         //creare html con messaggio d'errore
      }
        ?>
    </body>
</hmtl>
