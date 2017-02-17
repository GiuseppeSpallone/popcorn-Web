<?php
include 'controllers/SessionManager.php';

if ($is_authorized) {
    include 'check/stampa_prezzi.php';

    $error = $_REQUEST['errorPrezzi'];
    $message = "";
    switch ($error) {
        case 'mancanoCampi':
            $message = "Non sono stati inseriti tutti i campi";
            break;

    }
    ?>
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
    $selector = 5;
    include 'nav.php';
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="biglietti-form" action="check/prezzi.php" method="post" role="form">
                                    <h2>BIGLIETTI</h2>
                                    <div class="form-group">
                                        <?php echo '<input type="number" name="feriali" tabindex="1" class="form-control"
                                           placeholder="Feriali" value="' . $prezzo['feriale'] . '">'; ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo '<input type="number" name="festivi" tabindex="2" class="form-control"
                                           placeholder="Festivi" value="' . $prezzo['festivo'] . '">'; ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo '<input type="number" name="3d" tabindex="3" class="form-control"
                                     placeholder="3D" value="' . $prezzo['3d'] . '">'; ?>
                                    </div>

                                    <h2>ABBONAMENTI</h2>
                                    <div class="form-group">
                                        <?php echo '<input type="number" name="3ingressi" tabindex="4" class="form-control"
                                           placeholder="3 Ingressi" value="' . $prezzo['3ingressi'] . '">'; ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo '<input type="number" name="5ingressi" tabindex="5" class="form-control"
                                           placeholder="5 Ingressi" value="' . $prezzo['5ingressi'] . '">'; ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo '<input type="number" name="10ingressi" tabindex="6" class="form-control"
                                           placeholder="10 Ingressi" value="' . $prezzo['10ingressi'] . '">'; ?>
                                    </div>

                                    <?php if ($error)
                                        echo '<div class="form-group"> <div class="alert alert-danger" role="alert">' . $message . '</div></div>'; ?>

                                    <div class="form-group">
                                        <button id="salva-prezzi" type="button" class="form-control btn btn-login"
                                                tabindex="7">Salva
                                        </button>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="prezziModal" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="form-group">
                    <div class="modal-header">
                        <h2>AGGIORNAMENTO PREZZI</h2>
                    </div>
                </div>
                <div class="form-group">
                    <div class="modal-body">Sei sicuro di voler modificare i prezzi?
                    </div>
                </div>

                <div class="modal-footer">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <input type="submit" id="prezzi-submit" tabindex="4"
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