 <?php
        require_once 'connessioneDB.php';

        $username = filter_input(INPUT_POST, 'username');
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $password2 = filter_input(INPUT_POST, 'confirm-password');

        //Controllo presenza campi
        if (!$username || !$email || !$password || !$password2) {
            die('Non hai completato tutti i campi');
        }

        //Controllo coincidenza password
        if ($password != $password2) {
            die('Le due password non combaciano.');
        }

        //Cripta la password
        $password = md5($password);
        if (!get_magic_quotes_gpc()) {
            $username = addslashes($username);
            $email = addslashes($email);
            $password= addslashes($password);
            $password2 = addslashes($password2);
            //stripslashes per rimuovere /
             }


        $query = "INSERT INTO utente (username, email, password) VALUES ('$username','$email','$password')";

        $risultato = $connessione->query($query);
        if (!$risultato) {
            header("location: ../accesso_registrazione.php");
            //echo "Errore della query: " . $connessione->error . ".";

            //creare messaggio d'errore
        } else {
            header("location: ../index.php");
            //echo "Inserimenti effettuati correttamente.";

            //creare messaggio di benvenuto
        }

        $connessione->close();
?>
