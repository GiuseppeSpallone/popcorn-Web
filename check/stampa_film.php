<?php
require_once __DIR__ . '/../controllers/DbManager.php';

$db_instance = new DbManager();

if ($_REQUEST['film']) {
    //scheda film
    $titoloFilm = $_REQUEST['film'];
    $replace_titolo = str_replace('_', ' ', $titoloFilm);
    $resultFilm = $db_instance->select([], 'film', "titolo = '$replace_titolo'")->fetch_array();

} else if ($_REQUEST['modifica']) {
    //form modifica film
    $titoloFilm = $_REQUEST['modifica'];
    $replace_titolo = str_replace('_', ' ', $titoloFilm);
    $resultFilm = $db_instance->select([], 'film', "titolo = '$replace_titolo'")->fetch_array();
} else {
    //in programmazione e modifica film(AMMINISTRATORE)
    $resultFilm = $db_instance->select(array('titolo'), 'film');
}


$db_instance->connection->close();
?>