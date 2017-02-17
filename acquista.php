<?php

include 'controllers/SessionManager.php';

if ($is_logged) {

    include 'check/stampa_film.php';
    include 'check/stampa_orari_sale.php';
    include 'check/acquista.php';
    ?>

    <html>

    <head>
        <title>Popcorn</title>
        <link rel="icon" href="/logo/Pop.png" type="image/png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/carrello.css" rel="stylesheet" type="text/css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/error_manage.js"></script>
    </head>

    <body>
    <?php
    $selector = 6;
    include 'nav.php';
    ?>

    <style>

        td.no_show {
            display: none;

        }

    </style>

    <div class="container" style="background-color:#fff">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
            <tr>
                <th style="width:50%">Prodotto</th>
                <th style="width:8%">Quantità</th>
                <th style="width:8%">Giorno</th>
                <th style="width:8%">Orario</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td data-th="Prodotto">
                    <div class="row">
                        <div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..."
                                                             class="img-responsive"/></div>
                        <div class="col-sm-10">
                            <?php echo '<h4 class="nomargin">' . $resultFilm['titolo'] . '</h4>'; ?>
                        </div>
                    </div>
                </td>
                <form id="acquista" role="form">
                    <td data-th="Quantità">
                        <input name="quantita" id="quantita" type="number" class="form-control text-center" value="1">
                    </td>
                    <td data-th="Giorno">
                        <input name="data" id="data" type="date" class="" value="1">
                    </td>
                    <td data-th="Ora">
                        <select class="form-control text-centerl" name="orario" id="orario">
                            <?php echo '<option>' . $resultOrari['primo'] . '</option>' ?>
                            <?php echo '<option>' . $resultOrari['secondo'] . '</option>' ?>
                            <?php echo '<option>' . $resultOrari['terzo'] . '</option>' ?>
                        </select>
                    </td>

            </tr>
            </tbody>
            <tfoot>
            <tr>
                <td><a href="programmazione.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue
                        Shopping</a>
                </td>
                <td colspan="2" class="hidden-xs"></td>
                <td id="totale" class="hidden-xs text-center no_show"><strong><?php echo $totale ?> </strong></td>
                <td><input class="btn btn-success btn-block" type="submit" value="Checkout"> </td>
            </tr>
            </form>
            </tfoot>
        </table>
    </div>
    </body>

    </html>
<?php } else {
    header("location: ../accesso_registrazione.php");
    //aggiungere messeggio
} ?>