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
            $selector = 4;
            include 'nav.php';
    ?>

            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="panel panel-film">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form id="film-form" action="check/film.php" method="post" role="form" style="display: block;">
                                            <h2>Inserisci Film</h2>
                                            <div id="film_form" class="form-group">
                                                <input type="text" name="titolo" id="titolo" tabindex="1" class="form-control" placeholder="Titolo" value="">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="nazione" id="nazione" tabindex="2" class="form-control" placeholder="Nazione">
                                            </div>
                                            <div class="form-group">
                                                <input type="date" name="anno" id="anno" tabindex="3" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="genere" id="genere" tabindex="4" class="form-control" placeholder="Genere">
                                            </div>
                                            <div class="form-group">
                                                <input type="number" name="durata" id="durata" tabindex="5" class="form-control" placeholder="Durata (in minuti)">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="regia" id="regia" tabindex="6" class="form-control" placeholder="Regia">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="cast" id="cast" tabindex="7" class="form-control" placeholder="Cast">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="produzione" id="produzione" tabindex="8" class="form-control" placeholder="Produzione">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="distribuzione" id="distribuzione" tabindex="9" class="form-control" placeholder="Distribuzione">
                                            </div>
                                            <div class="form-group">
                                                <input type="date" name="data_uscita" id="data_uscita" tabindex="10" class="form-control" placeholder="Data Uscita">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="trama" id="trama" tabindex="11" class="form-control" placeholder="Trama">
                                            </div>

                                            <div class="col-xs-6 form-group pull-left radio">
                                                <input id="radio1" type="radio" name="prossimamente">
                                                <label for="radio1">In Programmazione</label>
                                            </div>
                                            <div class="col-xs-6 form-group pull-left radio">
                                                <input id="radio2" type="radio" name="prossimamente">
                                                <label for="radio2">Prossimamente</label>
                                            </div>
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="film-submit" id="film-submit" tabindex="14" class="form-control btn btn-film" value="Carica Film">
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
