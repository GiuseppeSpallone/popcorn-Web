<?php

$titolo = $_REQUEST['modifica'];
$titoloFilm = str_replace('_', ' ', $titolo);

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
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="biglietti-form" action="check/.php" method="post" role="form">
                                <h2> <?php echo $titoloFilm ?> </h2>
                                <h2>ORARI </h2>
                                <div class="form-group">
                                    <label for="sel2">Orario 1</label>
                                    <select class="form-control" id="sel2">
                                        <option>16:00</option>
                                        <option>17:00</option>
                                        <option>18:00</option>
                                        <option>19:00</option>
                                        <option>20:00</option>
                                        <option>21:00</option>
                                        <option>22:00</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="sel2">Orario 2</label>
                                    <select class="form-control" id="sel2">
                                        <option>16:00</option>
                                        <option>17:00</option>
                                        <option>18:00</option>
                                        <option>19:00</option>
                                        <option>20:00</option>
                                        <option>21:00</option>
                                        <option>22:00</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="sel2">Orario 3</label>
                                    <select class="form-control" id="sel2">
                                        <option>16:00</option>
                                        <option>17:00</option>
                                        <option>18:00</option>
                                        <option>19:00</option>
                                        <option>20:00</option>
                                        <option>21:00</option>
                                        <option>22:00</option>
                                    </select>
                                </div>

                                <h2>SALA</h2>
                                <div class="form-group">
                                    <select class="form-control" id="sel2">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <a href="modifica_film.php" class="form-control btn btn-login">Indietro</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button id="salva-orari" type="button" class="form-control btn btn-login"
                                            tabindex="">Salva
                                    </button>
                                </div>


                                <div class="modal fade" id="orariModal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="form-group">
                                                <div class="modal-header">
                                                    <h2>AGGIORNAMENTO ORARI E SALE</h2>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="modal-body">Sei sicuro di voler modificare orari e sala?
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-sm-offset-3">
                                                            <input type="submit" id="orari-submit" tabindex="4"
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/login.js"></script>
<script src="js/messaggi.js"></script>

</body>

</html>
