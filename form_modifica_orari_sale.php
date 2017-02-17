<?php
include 'controllers/SessionManager.php';


if ($is_authorized) {

    include 'check/stampa_orari_sale.php';

    if ($_REQUEST['modifica']) {
        $titoloFilm = $_REQUEST['modifica'];
        $titoloFilm = str_replace('_', ' ', $titoloFilm);
    } ?>

    <html>
    <head>
        <title>Popcorn</title>
        <link rel="icon" href="/logo/Pop.png" type="image/png" />
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
                                <h2> <?php echo $titoloFilm ?> </h2>

                                <?php echo '<form id="orari-sale-form" action="check/orari_sale.php?modifica=' . $titoloFilm . '" method="post" role="form">' ?>
                                <div class="col-xs-6">
                                    <h2>ORARI</h2>
                                    <div class="form-group">
                                        <?php echo '<input type="time" name="orario1" id="orario1" tabindex="1" class="form-control"
                                       placeholder="Orario 1" value="' . $resultOrari['primo'] . '">'; ?>
                                    </div>

                                    <div class="form-group">
                                        <?php echo '<input type="time" name="orario2" id="orario2" tabindex="2" class="form-control"
                                       placeholder="Orario 2" value="' . $resultOrari['secondo'] . '">'; ?>
                                    </div>

                                    <div class="form-group">
                                        <?php echo '<input type="time" name="orario3" id="orario3" tabindex="3" class="form-control"
                                       placeholder="Orario 3" value="' . $resultOrari['terzo'] . '">'; ?>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <h2>SALE</h2>
                                    <div class="form-group">
                                        <?php echo '<input type="number" name="sala1" id="sala1" tabindex="4" class="form-control"
                                       placeholder="Sala 1" value="' . $resultSale['id_prima'] . '">'; ?>
                                    </div>

                                    <div class="form-group">
                                        <?php echo '<input type="number" name="sala2" id="sala2" tabindex="5" class="form-control"
                                       placeholder="Sala 2" value="' . $resultSale['id_seconda'] . '">'; ?>
                                    </div>

                                    <div class="form-group">
                                        <?php echo '<input type="number" name="sala3" id="sala3" tabindex="6" class="form-control"
                                       placeholder="Sala 3" value="' . $resultSale['id_terza'] . '">'; ?>
                                    </div>


                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                    <button id="salva-orari-sale" type="button" class="form-control btn btn-login"
                                            tabindex="">Salva
                                    </button>
                                </div></div></div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <a href="modifica_film.php"
                                               class="form-control btn btn-login">Indietro</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="orari-saleModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="form-group">
                                            <div class="modal-header">
                                                <h2>AGGIORNAMENTO ORARI E SALE</h2>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="modal-body">Sei sicuro di voler modificare gli orari e le sale?
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
<?php } else {
    header("location: ../accesso_registrazione.php");
    //aggiungere messeggio
} ?>