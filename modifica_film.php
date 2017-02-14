<?php
include 'check/stampa_film.php';
?>

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
                        <?php echo '<form id="elimina" action="check/elimina_film.php?elimina=' . $replace_film . ' " method="post" role="form">'; ?>

                        <div class="form-group">

                             <button  type="submit" class="btn btn-danger" tabindex="">Elimina
                            </button>

                            <!-- <input name="elimina-film" type="button" tabindex="" id="elimina-film"
                                   class="btn btn-danger" value="Elimina">
                            </input> -->
                        </div>

                        <div class="modal fade" id="eliminaModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="form-group">
                                        <div class="modal-header">
                                            <h2>Elimina film </h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="modal-body">Sei sicuro di voler eliminare il film?
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="submit" name="elimina-submit" id="elimina-submit"
                                                           tabindex="4"
                                                           class="form-control btn btn-register" value="Si">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input data-dismiss="modal" tabindex="5"
                                                           class="form-control btn btn-register" value="No">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </form>

                        <?php echo '<form id="modifica-film" action="form_modifica_film.php?modifica=' . $replace_film . '" method="post" role="form">'; ?>
                        <input type="submit" name="modifica-submit" id="modifica-submit" tabindex=""
                               class="btn btn-warning" value="Modifica">
                        </form>

                        <?php echo '<form id="modifica-film" action="form_modifica_orari_sale.php?modifica=' . $replace_film . '" method="post" role="form">'; ?>
                        <input type="submit" name="modifica-submit" id="modifica-submit" tabindex=""
                               class="btn btn-primary" value="Orari e sale">
                        </form>

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
