<?php $titolo = $_REQUEST['modifica'];
$titoloFilm = str_replace('_', ' ', $titolo); ?>

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
                            <?php echo '<form id="film-form" action="check/modifica_film.php?modifica=' .$titolo.  '" method="post" role="form">' ?>
                                <h2>Modifica film <?php echo $titoloFilm ?> </h2>
                                <div class="form-group">
                                    <input type="text" name="titolo" id="titolo" tabindex="1" class="form-control"
                                           placeholder="Titolo" value="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="nazione" id="nazione" tabindex="2" class="form-control"
                                           placeholder="Nazione">
                                </div>

                                <div class="form-group">
                                    <label for="anno">Anno di produzione</label>
                                    <input type="number" name="anno" id="anno" min="1900" max="2099"
                                           class="form-control" tabindex="3" value="2017"/>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="genere" id="genere" tabindex="4" class="form-control"
                                           placeholder="Genere">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="durata" id="durata" tabindex="5" class="form-control"
                                           placeholder="Durata (in minuti)">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="regia" id="regia" tabindex="6" class="form-control"
                                           placeholder="Regia">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="cast" id="cast" tabindex="7" class="form-control"
                                           placeholder="Cast">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="produzione" id="produzione" tabindex="8"
                                           class="form-control" placeholder="Produzione">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="distribuzione" id="distribuzione" tabindex="9"
                                           class="form-control" placeholder="Distribuzione">
                                </div>
                                <div class="form-group">
                                    <label for="anno">Anno di uscita</label>
                                    <input type="date" name="data_uscita" id="data_uscita" tabindex="10"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="trama" id="trama" tabindex="11" class="form-control"
                                           placeholder="Trama">
                                </div>

                                <!--<div id="carica-poster" class="col-sm-6 col-sm-offset-3">
                                <input type="button"  name="poster-button" id="poster-button" tabindex="12" class="form-control btn btn-film" value="Carica Poster" onclick="location.href ='caricaFilm.php'">

                                </div>-->
                                <!--  <div class="form-group">
                                      <label for="carica-poster">Carica Poster</label>
                              <iframe id="carica-poster" src ="caricaFilm.php"  width="400" height="450"></iframe>

                               </div>-->

                                <!--     <div class="col-sm-6 col-sm-offset-3">
                                   <form action="" method="POST" enctype="multipart/form-data">
                                       <input type="file" name="image" id="image" tabindex="12" class="form-control btn btn-film" />
                                       <input type="submit" name="poster-submit" id="poster-submit" tabindex="13" class="form-control btn btn-poster" value="Carica Poster"> </form>
                               </div>
                                   -->

                                <div class="col-xs-6 form-group pull-left radio">
                                    <input id="prog" type="radio" name="prog" tabindex="14" class="form-control">
                                    <label for="prog">In Programmazione</label>

                                    <input id="pross" type="radio" name="prog" tabindex="13" class="form-control">
                                    <label for="pross">Prossimamente</label>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <a href="modifica_film.php" class="form-control btn btn-film">Indietro</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="film-submit" id="film-submit" tabindex="14"
                                                   class="form-control btn btn-film" value="Salva">
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
<script src="js/form_film.js"></script>


</body>

</html>