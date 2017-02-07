<?php
include 'check/SessionController.php';
$print_class = 'class="active"';
?>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand" style="width: 105px;">
                <img style="width: 100%;" class="logo" src="logo/Pop_redim.png" alt="Popcorn">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li <?= ($selector == 0) ? $print_class : '' ?> ><a href="index.php">Home</a></li>
                <li <?= ($selector == 1) ? $print_class : '' ?>><a href="programmazione.php">Programmazione</a></li>
                <li <?= ($selector == 2) ? $print_class : '' ?>><a href="prezzi.php">Prezzi e Sale</a></li>
                <li <?= ($selector == 3) ? $print_class : '' ?>><a href="contatti.php">Contatti</a></li>
                <?php
                    if($is_authorized){
                        ?>

                        <li <?= ($selector == 4) ? $print_class : '' ?>><a href="form_film.php">Inserisci Film</a></li>
                        <li <?= ($selector == 5) ? $print_class : '' ?>><a href="edit_prezzi.php">Modifica prezzi</a></li>
                    <?php
                }
                ?>

            </ul>

            <?php
            if ($is_logged) {
                ?>
                <ul class="nav navbar-nav navbar-right">
                    <li id="fat-menu" class="dropdown">
                        <a href="#" class="dropdown-toggle" id="drop3" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <?php echo $username; ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="drop3">
                            <li><a href="check/disconnessione.php">Disconnetti</a></li>
                        </ul>
                    </li>
                </ul>
                <?php
            } else {
                ?>
                <ul class="nav navbar-nav navbar-right">
                    <li id="fat-menu" class="dropdown">
                        <a href="#" class="dropdown-toggle" id="drop3" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Il mio account
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="drop3">
                            <li><a href="accesso_registrazione.php">Accedi</a></li>
                        </ul>
                    </li>
                </ul>
                <?php
            }
            ?>
        </div>
    </div>
</nav>
<br> <br> <br>
