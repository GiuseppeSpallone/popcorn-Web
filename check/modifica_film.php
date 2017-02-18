<?php
require_once __DIR__ . '/../controllers/DbManager.php';

$db_instance = new DbManager();

$titoloFilm = $_REQUEST['modifica'];
$titoloFilm = str_replace('_',' ',$titoloFilm);


$titolo = filter_input(INPUT_POST, 'titolo');
$nazione = filter_input(INPUT_POST, 'nazione');
$anno = filter_input(INPUT_POST, 'anno');
$genere = filter_input(INPUT_POST, 'genere');
$durata = filter_input(INPUT_POST, 'durata');
$regia = filter_input(INPUT_POST, 'regia');
$cast = filter_input(INPUT_POST, 'cast');
$produzione = filter_input(INPUT_POST, 'produzione');
$distribuzione = filter_input(INPUT_POST, 'distribuzione');
$data_uscita = filter_input(INPUT_POST, 'data_uscita');
$trama = filter_input(INPUT_POST, 'trama');


$result = $db_instance->update('film', "titolo ='$titolo', nazione ='$nazione', anno ='$anno', genere='$genere',
 durata='$durata', regia='$regia', cast='$cast', produzione='$produzione', distribuzione='$distribuzione',
  data_uscita='$data_uscita', trama='$trama'", "id_poster=image/$titolo", "titolo =$titoloFilm");

if ($result) {
    header("location: ../modifica_film.php");
    die();
}



$db_instance->connection->close();
?>