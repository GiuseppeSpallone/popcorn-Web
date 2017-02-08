<?php
$error = $_REQUEST['error'];
$message = "";
switch ($error) {
    case 'missing_fail':
        $message = "Mancano dei campi";
        break;

    case 'coincidenza_fail':
        $message = "Le password non coincidono";
        break;

    case 'autenticazione_fail':
        $message = "Username e/o password errati";
        break;

    default:
        $message = "Errore";
        break;
}
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
$selector = 6;
include 'nav.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="login-form" action="check/accesso.php" method="post" role="form"
                                  style="display: block;">
                                <h2>LOGIN</h2>
                                <div id="login_form" class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control"
                                           placeholder="Username" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2"
                                           class="form-control" placeholder="Password">
                                </div>
                                <div class="col-xs-6 form-group pull-left checkbox">
                                    <input id="checkbox1" type="checkbox" name="remember">
                                    <label for="checkbox1">Remember Me</label>
                                </div>

                                <?php if ($error)
                                    echo '<br><br><br> <div class="alert alert-danger" role="alert">' . $message . '</div>'; ?>

                                <div class="col-sm-6 col-sm-offset-3">
                                    <input type="submit" name="login-submit" id="login-submit" tabindex="4"
                                           class="form-control btn btn-login" value="Log In">
                                </div>
                            </form>
                            <form id="register-form" action="check/registrazione.php" method="post" role="form"
                                  style="display: none;">
                                <h2>REGISTER</h2>
                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control"
                                           placeholder="Username" value="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" tabindex="1" class="form-control"
                                           placeholder="Email Address" value="">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2"
                                           class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2"
                                           class="form-control" placeholder="Confirm Password">
                                </div>

                                <?php if ($error)
                                    echo '<br> <div class="alert alert-danger" role="alert">' . $message . '</div>'; ?>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="register-submit" id="register-submit"
                                                   tabindex="4" class="form-control btn btn-register"
                                                   value="Register Now">
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
                                <div id="login" class="login">LOGIN</div>
                            </a>
                        </div>
                        <div class="col-xs-6 tabs">
                            <a href="#" id="register-form-link">
                                <div id="register" class="register">REGISTER</div>
                            </a>
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

</body>

</html>
