<?php

include 'controllers/SessionManager.php';

if ($_REQUEST['utente']) {
    session_start();
    $_SESSION['recupero'] = $_REQUEST['utente'];
}

?>

<?php
$errorRecupero = $_REQUEST['error_recupero'];

$messageRecupero = "";
switch ($errorRecupero) {
    case 'campi_vuoti':
        $messageRecupero = "Non sono stati inseriti tutti i campi";
        break;

    case 'psw_non_coincidenti':
        $messageRecupero = "Le password non coincidono";
        break;

    default:
        $messageRecupero = "Riprova...";
        break;
}
?>

<html>

<head>
    <title>POPCORN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/form_film.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <script src="js/error_manage.js"></script>
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
                                <div id="errorRec"  class="alert alert-danger no_show" role="alert"></div>

                               <!-- --><?php /*if ($errorRecupero)
                                    echo '<div class="form-group"><div class="alert alert-danger" role="alert">' . $messageRecupero . '</div></div>'; */?>

                                <div class="col-sm-6 col-sm-offset-3">
                                    <input type="submit" name="password-submit" id="film-submit" tabindex="14"
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/form_film.js"></script>

</body>

</html>
