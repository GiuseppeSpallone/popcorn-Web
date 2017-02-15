<?php
/*$errorRegistrazione = $_REQUEST['error_registrazione'];
$messageRegistrazione = "";
switch ($errorRegistrazione) {
    case 'campi_vuoti':
        $messageRegistrazione = "Non sono stati inseriti tutti i campi";
        break;

    case 'psw_non_coincidenti':
        $messageRegistrazione = "Le password non coincidono";
        break;

    case 'username_esistente':
        $messageRegistrazione = "Username già esistente";
        break;

    case 'email_esistente':
        $messageRegistrazione = "Email già esistente";
        break;

    default:
        $messageRegistrazione = "Riprova...";
        break;
}

$errorAccesso = $_REQUEST['error_accesso'];
$messageAccesso = "";
switch ($errorAccesso) {
    case 'accesso_non_autenticato':
        $messageAccesso = "Username e/o password errati";
        break;

    default:
        $messageAccesso = "Riprova...";
        break;
}

$errorRecupero = $_REQUEST['error_recupero'];
$messageRecupero = "";
switch ($errorRecupero) {
    case 'campi_vuoti':
        $messageRecupero = "Non sono stati inseriti tutti i campi";
        break;

    case 'non_esistente':
        $messageRecupero = "Username o email non esistente";
        break;

    default:
        $messageRecupero = "Riprova...";
        break;
}
*/?>

<html>

<head>
    <title>POPCORN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/login.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/login.js"></script>
    <script src="js/messaggi.js"></script>
    <script src= "js/error_manage.js"></script>
</head>

<body>
<?php
$selector = 7;
include 'nav.php';
?>

<style>

    div.no_show{
        display: none;

    }

</style>



<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="login-form" role="form">
                                <h2>ACCESSO</h2>
                                <div id="login_form" class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control"
                                           placeholder="Username" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2"
                                           class="form-control" placeholder="Password">
                                </div>
                                <!-- <div class="col-xs-6 form-group pull-left checkbox">
                                    <input id="checkbox1" type="checkbox" name="remember">
                                    <label for="checkbox1">Remember Me</label>
                                </div> -->

                                <div id="errorLogin"  class="alert alert-danger no_show" role="alert">Utente o password non corretti.</div>
                                <div id="errorVuoti"  class="alert alert-danger no_show" role="alert">Campi vuoti.</div>

<!--
                                --><?php /*if ($errorAccesso)
                                    echo '<div class="form-group"><div class="alert alert-danger" role="alert">' . $messageAccesso . '</div></div>'; */?>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="login-submit" id="login-submit" tabindex="3"
                                                   class="form-control btn btn-login" value="Accedi">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="button" id="recupero" name="recupero-btn" tabindex="4"
                                                   class="form-control btn btn-login" value="Recupera password" onclick="recuperoPassword()">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form id="register-form"  role="form" style="display: none;">
                                <h2>REGISTRAZIONE</h2>
                                <div class="form-group">
                                    <input type="text" name="username" id="username-reg" tabindex="1" class="form-control"
                                           placeholder="Username" value="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email-reg" tabindex="2" class="form-control"
                                           placeholder="Email Address" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password-reg" tabindex="3"
                                           class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="confirm-password" id="confirm-password" tabindex="4"
                                           class="form-control" placeholder="Confirm Password">
                                </div>

                                <div id="errorSend"  class="alert alert-danger no_show" role="alert">Email non inviata. </div>
                                <div id="errorEmail"  class="alert alert-danger no_show" role="alert">Email non disponibile</div>
                                <div id="errorUtente"  class="alert alert-danger no_show" role="alert">Username non disponibile.</div>
                                <div id="errorVuoti"  class="alert alert-danger no_show" role="alert">Campi vuoti.</div>
                                <div id="errorDismatch"  class="alert alert-danger no_show" role="alert">Le password non coincidono.</div>


                               <!-- --><?php /*if ($errorRegistrazione)
                                    echo '<div class="form-group"><div class="alert alert-danger" role="alert">' . $messageRegistrazione . '</div></div>'; */?>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="register-submit" id="register-submit"
                                                   tabindex="4" class="form-control btn btn-register" tabindex="5"
                                                   value="Registrati">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6 tabs">
                            <a href="#" class="active" id="login-form-link">
                                <div id="login" class="login">ACCESSO</div>
                            </a>
                        </div>
                        <div class="col-xs-6 tabs">
                            <a href="#" id="register-form-link">
                                <div id="register" class="register">REGISTRAZIONE</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="recuperoModal" tabindex="6" role="dialog" aria-hidden="false">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-recupero">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="recupero-form"  role="form">
                                    <h2>RECUPERO PASSWORD</h2>
                                    <h2>Le invieremo il link per recuperare la password</h2>
                                    <div class="form-group">
                                        <input type="text" name="username-recupero" id="username-recupero" tabindex="7"
                                               class="form-control" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email-recupero" id="email-recupero" tabindex="8"
                                               class="form-control" placeholder="Email">
                                    </div>

                                    <div id="errorRec"  class="alert alert-danger no_show" role="alert">Errore Recupero</div>
                                    <div id="errorUtente"  class="alert alert-danger no_show" role="alert">Utente non trovato</div>
                                    <div id="errorVuoti"  class="alert alert-danger no_show" role="alert">Campi vuoti.</div>


                                 <!--   --><?php /*if ($errorRecupero)
                                        echo '<div class="form-group"><div class="alert alert-danger" role="alert">' . $messageRecupero . '</div></div>'; */?>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="recupero-submit" id="recupero-submit"
                                                       tabindex="9" class="form-control btn btn-login" value="Invia">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input tabindex="10" class="form-control btn btn-login" data-dismiss="modal" value="Chiudi">
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
</div>


</body>

</html>
