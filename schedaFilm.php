<?php
include 'check/stampa_film.php';


?>

<html>

<head>
    <title>Popcorn</title>
    <link rel="icon" href="/logo/Pop.png" type="image/png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/comments.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
</head>

<body>
<?php
$selector = 1;
include 'nav.php';
?>
<br><br><br>
<div class="container">

    <div class="row">

        <div class="col-md-6">
            <div class="thumbnail">
                <?php echo ' <img src="image/'.$resultFilm['titolo'].'.jpg" alt="...">'; ?>
            </div>
        </div>

        <div class="col-md-6">
            <div class="thumbnail">
                <table class="table table-condensed">
                    <tbody>
                    <tr>
                        <td>Titolo originale</td>
                        <td> <?php echo $resultFilm['titolo']; ?></td>
                    </tr>
                    <tr>
                        <td>Nazione</td>
                        <td><?php echo $resultFilm['nazione']; ?></td>
                    </tr>
                    <tr>
                        <td>Anno</td>
                        <td><?php echo $resultFilm['anno']; ?></td>
                    </tr>
                    <tr>
                        <td>Genere</td>
                        <td><?php echo $resultFilm['genere']; ?></td>
                    </tr>
                    <tr>
                        <td>Durata</td>
                        <td><?php echo $resultFilm['durata'] . '\''; ?></td>
                    </tr>
                    <tr>
                        <td>Regia</td>
                        <td><?php echo $resultFilm['regia']; ?></td>
                    </tr>
                    <tr>
                        <td>Cast</td>
                        <td><?php echo $resultFilm['cast']; ?></td>
                    </tr>
                    <tr>
                        <td>Produzione</td>
                        <td><?php echo $resultFilm['produzione']; ?></td>
                    </tr>
                    <tr>
                        <td>Distribuzione</td>
                        <td><?php echo $resultFilm['distribuzione']; ?></td>
                    </tr>
                    <tr>
                        <td>Data di uscita</td>
                        <td><?php echo $resultFilm['data_uscita']; ?></td>
                    </tr>
                    <tr>
                        <td>Trama</td>
                        <td><?php echo $resultFilm['trama']; ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
                <a href="programmazione.php" class="btn btn-warning btn-block"><i class="fa fa-angle-left"></i> Torna
                    indietro</a>
            <?php echo '<a href="acquista.php?acquista=' . $resultFilm['titolo'] . '" class="btn btn-success btn-block" role="button">Acquista <i class="fa fa-angle-right"></i></a>' ?>

        </div>


    </div>
</div>

<div class="container">
    <div class="panel panel-white post panel-shadow">
        <div class="post-heading">
            <div class="pull-left image">
                <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
            </div>
            <div class="pull-left meta">
                <div class="title h5">
                    <a href="#"><b>Ryan Haywood</b></a> made a post.
                </div>
                <h6 class="text-muted time">1 minute ago</h6>
            </div>
        </div>
        <div class="post-description">
            <p>Bootdey is a gallery of free snippets resources templates and utilities for bootstrap css hmtl js framework. Codes for developers and web designers</p>
            <div class="stats">
                <a href="#" class="btn btn-default stat-item">
                    <i class="fa fa-thumbs-up icon"></i>2
                </a>
                <a href="#" class="btn btn-default stat-item">
                    <i class="fa fa-share icon"></i>12
                </a>
            </div>
        </div>
        <div class="post-footer">
            <div class="input-group">
                <input class="form-control" placeholder="Add a comment" type="text">
                <span class="input-group-addon">
                        <a href="#"><i class="fa fa-edit"></i></a>
                    </span>
            </div>
            <ul class="comments-list">
                <li class="comment">
                    <a class="pull-left" href="#">
                        <img class="avatar" src="http://bootdey.com/img/Content/user_1.jpg" alt="avatar">
                    </a>
                    <div class="comment-body">
                        <div class="comment-heading">
                            <h4 class="user">Gavino Free</h4>
                            <h5 class="time">5 minutes ago</h5>
                        </div>
                        <p>Sure, oooooooooooooooohhhhhhhhhhhhhhhh</p>
                    </div>
                    <ul class="comments-list">
                        <li class="comment">
                            <a class="pull-left" href="#">
                                <img class="avatar" src="http://bootdey.com/img/Content/user_3.jpg" alt="avatar">
                            </a>
                            <div class="comment-body">
                                <div class="comment-heading">
                                    <h4 class="user">Ryan Haywood</h4>
                                    <h5 class="time">3 minutes ago</h5>
                                </div>
                                <p>Relax my friend</p>
                            </div>
                        </li>
                        <li class="comment">
                            <a class="pull-left" href="#">
                                <img class="avatar" src="http://bootdey.com/img/Content/user_2.jpg" alt="avatar">
                            </a>
                            <div class="comment-body">
                                <div class="comment-heading">
                                    <h4 class="user">Gavino Free</h4>
                                    <h5 class="time">3 minutes ago</h5>
                                </div>
                                <p>Ok, cool.</p>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>

</body>

</html>
