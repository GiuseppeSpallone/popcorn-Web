<?php
include 'controllers/SessionManager.php';
if ($_REQUEST['rec']) {
    session_start();
    $_SESSION['recupero'] = $_REQUEST['rec'];
}
?>

<head>
    <title>POPCORN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/form_film.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/recupero.js"></script>
    <style>

        div.no_show{
            display: none;
        }

    </style>
</head>

<body>
<?php
$selector = 7;
include 'nav.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-film">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="password-form"  role="form" style="display: block;">
                                <h2>RECUPERO PASSWORD</h2>
                                <div class="form-group">
                                    <input type="password" name="nuova-password" id="nuova-password" tabindex="1"
                                           class="form-control" placeholder="Nuova password">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="conferma-nuova-password" id="conferma-nuova-password"
                                           tabindex="1" class="form-control" placeholder="Conferma nuova password">
                                </div>
                                <div id="errorAgg"  class="alert alert-danger no_show" role="alert">Errore aggiornamento.</div>
                                <div id="errorEmail"  class="alert alert-danger no_show" role="alert">Email non inviata.</div>
                                <div id="errorDismatch"  class="alert alert-danger no_show" role="alert">Password non coincidente.</div>

                               <!-- --><?php /*if ($errorRecupero)
                                    echo '<div class="form-group"><div class="alert alert-danger" role="alert">' . $messageRecupero . '</div></div>'; */?>

                                <div class="col-sm-6 col-sm-offset-3">
                                    <input type="submit" name="password-submit" id="password-submit" tabindex="14"
                                           class="form-control btn btn-film" value="Continua">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



</body>

</html>
