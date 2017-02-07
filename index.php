<?php
include 'check/SessionController.php';
?>

<html>

<head>
    <title>POPCORN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="coverflow/css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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

                                <a href="schedaFilm.html" role="button">
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

    <?php
    if ($is_logged) {
        echo '<div class="alert alert-success" role="alert">Benvenuto ' . $username . '</div>)';
    }
    ?>

            <script src="js/bootstrap.js"></script>
            <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
            <script src="coverflow/js/coverflow.min.js"></script>
            <script>
                $coverflow = $("#coverflow").coverflow({
                    "path": "coverflow/"
                });
            </script>

</body>

</html>
