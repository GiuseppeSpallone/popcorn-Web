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
$selector = 5;
include 'nav.php';
?>


<div class="container">
    <div class="row">

        <?php while ($film = $resultFilm->fetch_array(MYSQLI_ASSOC)) {
            $replace_film = str_replace(' ', '_', $film['titolo']);
            ?>


            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <?php echo '<a href="schedaFilm.php?film=' . $replace_film . '" role="button">' ?>
                    <img src="image/1.jpg"></a>

                    <div class="caption">
                        <h3> <?php echo $film['titolo'] ?></h3>
                        <a href="" class="btn btn-warning" role="button">Modifica</a>
                        <a href="" class="btn btn-danger" role="button">Elimina</a>
                    </div>

                </div>
            </div>
        <?php } ?>

    </div>
</div>


<script src="js/bootstrap.js"></script>

</body>

</html>
