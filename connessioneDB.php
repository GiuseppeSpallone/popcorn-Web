<html>
    <head>
        <meta charset="UTF-8">
        <title>Connessione database</title>
    </head>
    <body>
        <?php
        $host = "localhost";
        $user = "root";
        $password = "";
        $db = "popcorn";

        $connessione = new mysqli($host, $user, $password, $db);

        if ($connessione->connect_errno) {
            echo "Connessione fallita: " . $connessione->connect_error . ".";
            exit();
        }
        ?>
    </body>
</html>
