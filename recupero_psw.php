<?php
$recupero_email = $_REQUEST['utente'];
?>

<html>

<head>
    <title>POPCORN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/form_film.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
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
                            <?php echo '<form id="password-form" action="check/aggiorna_psw.php?utente=' . $recupero_email . '" method="post" role="form" style="display: block;">' ?>
                            <h2>RECUPERO PASSWORD</h2>
                            <div class="form-group">
                                <input type="password" name="nuova-password" id="nuova-password" tabindex="1"
                                       class="form-control" placeholder="Nuova password">
                            </div>
                            <div class="form-group">
                                <input type="password" name="conferma-nuova-password" id="conferma-nuova-password"
                                       tabindex="1" class="form-control" placeholder="Conferma nuova password">
                            </div>
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
