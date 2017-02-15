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
$selector = 1;
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

                        <fieldset class="rating">
                            <input type="radio" id="star5" name="rating" value="5"/>
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half"/>
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4"/>
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half"/>
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3"/>
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half"/>
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2"/>
                            <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half"/>
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1"/>
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half"/>
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                        <table class="table table-striped">
                            <tbody>
                            <thead>
                            <tr>
                                <th>Orari</th>
                                <th>Sala 1</th>
                            </tr>
                            </thead>
                            <tr>
                                <td>Festivo</td>
                                <td>16:00</td>
                            </tr>
                            <tr>
                                <td>Feriale</td>
                                <td>18:30</td>
                            </tr>
                            <tr>
                                <td>Feriale</td>
                                <td>21:15</td>

                            </tr>
                            <tr>
                                <?php echo '<td><a href="acquista.php?acquista=' . $replace_film . '" class="btn btn-success" role="button">Acquista</a></td>' ?>
                            </tr>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        <?php } ?>

    </div>
</div>


<script src="js/bootstrap.js"></script>

</body>

</html>
