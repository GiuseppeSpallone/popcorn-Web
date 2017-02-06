<html>
    <head>
        <meta charset="UTF-8">
        <title>Connessione database</title>
    </head>
    <body>
        <?php
        // nome di host
        $host = "localhost";
        // username dell'utente in connessione
        $user = "root";
        // password dell'utente
        $password = "";
        // nome del database
        $db = "popcorn";


        # stringa di connessione al DBMS
        // istanza dell'oggetto della classe MySQLi
        $connessione = new mysqli($host, $user, $password, $db);

        // verifica su eventuali errori di connessione
        if ($connessione->connect_errno) {
            echo "Connessione fallita: " . $connessione->connect_error . ".";
            exit();
        }
        ?>
    </body>
</html>
