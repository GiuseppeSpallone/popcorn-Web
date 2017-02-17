<?php
include 'controllers/SessionManager.php';
$div_to_show = $_REQUEST['logged'];
?>

<html>

<head>
    <title>Popcorn</title>
    <link rel="icon" href="/logo/Pop.png" type="image/png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="coverflow/css/style.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/error_manage.js"></script>

    <script>
        $(document).ready(function () {
            var div_to_show = "<?php echo $div_to_show;?>";
            if (div_to_show == "user") {
                $("div#user").modal("show");
            } else if (div_to_show == "admin") {
                console.log("ciaooo");
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
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <div class="item active">
                <img src="image/1.jpg" width="460" height="345">
                <div class="carousel-caption">
                </div>
            </div>

            <div class="item">
                <img src="image/2.jpg" width="460" height="345">
                <div class="carousel-caption">
                </div>
            </div>

            <div class="item">
                <img src="image/3.jpg" width="460" height="345">
                <div class="carousel-caption">
                </div>
            </div>

            <div class="item">
                <img src="image/4.jpg" width="460" height="345">
                <div class="carousel-caption">
                </div>
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>



<div id="user" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="alert alert-success" role="alert">Benvenuto su Popcorn <?php echo $username ?></div>
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
