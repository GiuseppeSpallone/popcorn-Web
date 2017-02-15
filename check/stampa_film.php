<?php
require_once __DIR__ . '/../controllers/DbManager.php';

$db_instance = new DbManager();

//da aggiustare

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
} else if ($_REQUEST['acquista']) {
    //acquista
    $titoloFilm = $_REQUEST['acquista'];
    $replace_titolo = str_replace('_', ' ', $titoloFilm);
    $resultFilm = $db_instance->select([], 'film', "titolo = '$replace_titolo'")->fetch_array();
} else {
    //programmazione e modifica film(AMMINISTRATORE)
    $resultFilm = $db_instance->queryString("SELECT titolo, primo, secondo, terzo, id_prima, id_seconda, id_terza
FROM((film INNER JOIN prog_film ON film.id = id_film)
INNER JOIN sale_film ON id_sale = sale_film.id)
INNER JOIN orari ON orari.id_orari = prog_film.id_orari");
}


$db_instance->connection->close();
?>