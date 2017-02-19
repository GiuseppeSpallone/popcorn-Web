<?php
include 'controllers/SessionManager.php';


if ($is_authorized) {

    if ($_REQUEST['titolo']) {
        $titoloFilm = $_REQUEST['titolo'];
        $titoloFilm = str_replace('_', ' ', $titoloFilm);
    } ?>

    <html>
    <head>
        <title>Popcorn</title>
        <link rel="icon" href="/logo/Pop.png" type="image/png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/login.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed|Open+Sans+Condensed:300' rel='stylesheet'
              type='text/css'>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/poster.js"></script>
    </head>
    <?php
    $selector = 4;
    include 'nav.php';
    ?>

    <script>

        var titolo = "<?php echo $titoloFilm; ?>";
    </script>



    <body>
    /////////////////////////////
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-film">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="uploadimage" action="" method="post" enctype="multipart/form-data">
                                    <h1 id="titolo"> <?php echo $titoloFilm; ?> </h1>
                                    <div class="form-group">
                                        <div id="image_preview"><img id="previewing" src="" /></div>
                                    </div>
                                    <div class="form-group">
                                        <div id="selectImage">
                                            <label>Select Your Image</label><br/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="file" id="file" tabindex=""
                                               class="form-control form-input">
                                    </div>

                                    <div class="form-group">
                                        <div id="message"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="login-submit" id="login-submit"
                                                       tabindex="14"
                                                       class="form-control btn btn-login" value="Salva">
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
  </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>


    </html>
<?php } else {
    header("location: ../accesso_registrazione.php");
    //aggiungere messeggio
} ?>