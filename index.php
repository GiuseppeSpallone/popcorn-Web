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

    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>-->
    <script src="coverflow/js/coverflow.min.js"></script>
    <script>
        $coverflow = $("#coverflow").coverflow({
            "path": "coverflow/"
        });
    </script>

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


</head>

<body>
<?php
$selector = 0;
include 'nav.php';
?>



<div class="container">
    <div id="coverflow">
        <div class="covers">
            <ul>
                <li>
                    <div class="imgdiv">

                        <a href="schedaFilm.php" role="button">
                            <img src="coverflow/img/1.jpg" alt="">
                        </a>

                    </div>
                    <div class="text">

                    </div>
                </li>
                <li>
                    <div class="imgdiv">
                        <a>
                            <img src="coverflow/img/2.jpg" alt="">
                        </a>
                    </div>
                    <div class="text">

                    </div>
                </li>
                <li>
                    <div class="imgdiv">
                        <a>
                            <img src="coverflow/img/3.jpg" alt="">
                        </a>
                    </div>
                    <div class="text">

                    </div>
                </li>
                <li>
                    <div class="imgdiv">
                        <a>
                            <img src="coverflow/img/4.jpg" alt="">
                        </a>
                    </div>
                    <div class="text">

                    </div>
                </li>
                <li>
                    <div class="imgdiv">
                        <a>
                            <img src="coverflow/img/5.jpg" alt="">
                        </a>
                    </div>
                    <div class="text">

                    </div>
                </li>
                <li>
                    <div class="imgdiv">
                        <a>
                            <img src="coverflow/img/6.jpg" alt="">
                        </a>
                    </div>
                    <div class="text">

                    </div>
                </li>
                <li>
                    <div class="imgdiv">
                        <a>
                            <img src="coverflow/img/7.jpg" alt="">
                        </a>
                    </div>
                    <div class="text">

                    </div>
                </li>
                <li>
                    <div class="imgdiv">
                        <a>
                            <img src="coverflow/img/8.jpg" alt="">
                        </a>
                    </div>
                    <div class="text">

                    </div>
                </li>
                <li>
                    <div class="imgdiv">
                        <a>
                            <img src="coverflow/img/9.jpg" alt="">
                        </a>
                    </div>
                    <div class="text">

                    </div>
                </li>
            </ul>
            <div class="Controller"></div>
        </div>

    </div>
</div>
<br>
<br>
<br>


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
