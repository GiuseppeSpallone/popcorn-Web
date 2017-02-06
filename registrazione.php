<hmtl>

    <body>
        <?php
        require_once 'connessioneDB.php';

        $username = filter_input(INPUT_POST, 'username');
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');

        $query = "INSERT INTO utente (username, email, password) VALUES ('$username','$email','$password')";

        $risultato = $connessione->query($query);
        if (!$risultato) {
            header("location: accesso.html");
            //echo "Errore della query: " . $connessione->error . ".";

            //creare html con messaggio d'errore
        } else {
            header("location: index.html");
            //echo "Inserimenti effettuati correttamente.";

            //creare messaggio di benvenuto
        }

        $connessione->close();
        ?>
    </body>
</hmtl>
