<?php
include 'controllers/SessionManager.php';
$div_to_show = $_REQUEST['logged'];
include 'check/stampa_film.php';
?>

<html>

<head>
    <title>Popcorn</title>
    <link rel="icon" href="/logo/Pop.png" type="image/png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/carosello.js"></script>



    <script>
        $(document).ready(function () {
            var div_to_show = "<?php echo $div_to_show;?>";
            if (div_to_show == "user") {
                $("div#user").modal("show");
            } else if (div_to_show == "admin") {
                $("div#admin").modal("show");
            }

        });
    </script>

    <style>
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            width: 35%;
            margin: auto;
        }
    </style>


</head>

<body>
<?php
$selector = 0;
include 'nav.php';
?>

<div class="container">
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <script>  var titoli = [];</script>

        <?php
        while ($film = $resultFilm->fetch_array(MYSQLI_ASSOC)) { ?>
            <script> titoli.push("<?php echo $film["titolo"] ?>") ;</script>
            <?php
        }
        ?>

        <script>  console.log(titoli);        </script>

        <ol class="carousel-indicators">
           <!-- --><?php
/*            $i = 0;
            while ($film = $resultFilm->fetch_array(MYSQLI_ASSOC)) {
                if ($i == 0) {
                    echo '<li data-target="#myCarousel" data-slide-to="' . $i . '" class="active"></li>';

                } else {
                    echo '<li data-target="#myCarousel" data-slide-to="' . $i . '"></li>';
                }
                $i++;
            }

            */?>

        </ol>


        <div class="carousel-inner" role="listbox">
   <!--         --><?php
/*            $i = 0;
            while ($film = $resultFilm->fetch_array(MYSQLI_ASSOC)) {
                if ($i == 0) {
                    echo '<div class="item active"><img src="image/' . $replace_film . '.jpg" width="460" height="345">
                    <div class="carousel-caption">
                    </div>
                </div>';

                } else {
                    echo ' <div class="item"><img src="image/' . $replace_film . '.jpg" width="460" height="345">
                    <div class="carousel-caption">
                    </div>
                </div>';
                }
                $i++;
            }

            */?>


        </div>
        <!--Left and right controls-->
        <a class="left carousel-control" href="#myCarousel" role="button" data - slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria - hidden="true"></span>
            <span class="sr-only"> Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data - slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria - hidden="true"></span>
            <span class="sr-only"> Next</span>
        </a>
    </div>
</div>


<div id="user" class="modal fade" tabindex="-1" role="dialog" aria - labelledby="mySmallModalLabel"
     aria - hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="alert alert-success" role="alert"> Benvenuto su Popcorn <?php echo $username ?></div>
    </div>
</div>

<div id="admin" class="modal fade" tabindex="-1" role="dialog" aria - labelledby="mySmallModalLabel" aria -
     hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="alert alert-warning" role="alert">Benvenuto su Popcorn <?php echo $username ?></div>
    </div>
</div>
</body>



</html>
