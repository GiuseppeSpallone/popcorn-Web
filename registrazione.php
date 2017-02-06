<hmtl>

    <body>
        <?php
        require_once 'connessioneDB.php';

        $username = filter_input(INPUT_POST, 'username');
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');

        $sql = "INSERT INTO utente (username, email, password) VALUES ('$username','$email','$password')";

        $result = $connessione->query($sql);
        if (!$result) {
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
