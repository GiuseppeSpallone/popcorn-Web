<html>

<head>
    <title>POPCORN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/form_film.css.css" rel="stylesheet" type="text/css">
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
                                    <input type="number" name="feriali" tabindex="1" class="form-control" placeholder="Feriali" value="">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="festivi" tabindex="2" class="form-control" placeholder="Festivi">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="3d" tabindex="3" class="form-control" placeholder="3D">
                                </div>

                                <h2>ABBONAMENTI</h2>
                                <div class="form-group">
                                    <input type="number" name="3ingressi" tabindex="1" class="form-control" placeholder="3 Ingressi">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="5ingressi" tabindex="2" class="form-control" placeholder="5 Ingressi">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="10ingressi" tabindex="3" class="form-control" placeholder="10 Ingressi">
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="biglietti-submit" tabindex="4" class="form-control btn btn-register" value="Salva">
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

</body>

</html>
