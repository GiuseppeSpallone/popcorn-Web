<?php
include 'check/stampa_film.php';
?>

<html>

<head>
    <title>POPCORN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/star.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
                    <img src="image/X.jpg"></a>

                <div class="caption">
                    <h3> Inserisci un nuovo film </h3>
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
                        <?php echo '<form id="elimina-film" action="check/elimina_film.php?elimina=' . $replace_film . ' " method="post" role="form">'; ?>
                        <input type="submit" name="elimina-submit" id="elimina-submit" tabindex=""
                               class="btn btn-danger" value="Elimina">
                        </form>

                        <?php echo '<form id="modifica-film" action="check/modifica_film.php?modifica=' . $replace_film . '" method="post" role="form">'; ?>
                        <input type="submit" name="modifica-submit" id="modifica-submit" tabindex=""
                               class="btn btn-warning" value="Modifica">
                        </form>
                    </div>

                </div>
            </div>
        <?php } ?>

    </div>
</div>


<script src="js/bootstrap.js"></script>

</body>

</html>
