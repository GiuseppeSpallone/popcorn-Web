<?php
include 'controllers/SessionManager.php';

if ($is_authorized) {

    include 'check/stampa_film.php'; ?>

    <html>

    <head>
        <title>POPCORN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/login.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    </head>

    <body>
    <?php
    $selector = 4;
    include 'nav.php';
    ?>


    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a href="form_film.php" role="button">
                        <img src="image/aggiungi.svg"></a>

                    <div class="caption">
                        <h3> Inserisci un nuovo film </h3>
                        <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></button>
                        <button class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span>
                        </button>
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-film"></span>
                        </button>
                    </div>

                </div>
            </div>


            <?php while ($film = $resultFilm->fetch_array(MYSQLI_ASSOC)) {
                $replace_film = str_replace(' ', '_', $film['titolo']);
                ?>


                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <?php echo '<a href="schedaFilm.php?film=' . $replace_film . '" role="button">' ?>
                        <img src="image/1.jpg"></a>

                        <div class="caption">
                            <h3> <?php echo $film['titolo'] ?> </h3>

                            <?php echo '<button class="btn btn-danger"> <a href="check/elimina_film.php?elimina=' . $replace_film . '"> <span class="glyphicon glyphicon-trash"> </a> </button>' ?>
                            <?php echo '<button class="btn btn-warning"> <a href="form_modifica_film.php?modifica=' . $replace_film . '"> <span class="glyphicon glyphicon-pencil"></span> </a> </button>' ?>
                            <?php echo '<button class="btn btn-primary"> <a href="form_modifica_orari_sale.php?modifica=' . $replace_film . '"> <span class="glyphicon glyphicon-film"></span> </a> </button>' ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/login.js"></script>
    <script src="js/messaggi.js"></script>

    </body>

    </html>
<?php } else {
    header("location: ../accesso_registrazione.php");
    //aggiungere messeggio
} ?>