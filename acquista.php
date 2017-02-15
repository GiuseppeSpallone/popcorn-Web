<?php

include 'controllers/SessionManager.php';

if ($is_logged) {

    include 'check/stampa_film.php';
    include 'check/stampa_orari_sale.php';
    ?>

    <html>

    <head>
        <title>POPCORN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/carrello.css" rel="stylesheet" type="text/css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    </head>

    <body>
    <?php
    $selector = 6;
    include 'nav.php';
    ?>

    <div class="container" style="background-color:#fff">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
            <tr>
                <th style="width:50%">Prodotto</th>
                <th style="width:8%">Quantità</th>
                <th style="width:8%">Giorno</th>
                <th style="width:8%">Orario</th>
                <th style="width:10%"></th>
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
                <td data-th="Quantità">
                    <input type="number" class="form-control text-center" value="1">
                </td>
                <td data-th="Giorno">
                    <input type="date" class="" value="1">
                </td>
                <td data-th="Ora">
                    <select class="form-control text-centerl" id="orario">
                        <?php echo '<option>' . $resultOrari['primo'] . '</option>' ?>
                        <?php echo '<option>' . $resultOrari['secondo'] . '</option>' ?>
                        <?php echo '<option>' . $resultOrari['terzo'] . '</option>' ?>
                    </select>
                </td>
                <td class="actions" data-th="">
                    <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
                </td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <td><a href="programmazione.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue
                        Shopping</a>
                </td>
                <td colspan="2" class="hidden-xs"></td>
                <td class="hidden-xs text-center"><strong>Total $1.99</strong></td>
                <td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
            </tr>
            </tfoot>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>

    </body>

    </html>
<?php } else {
    header("location: ../accesso_registrazione.php");
    //aggiungere messeggio
} ?>