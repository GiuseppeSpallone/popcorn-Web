<?php
require_once __DIR__ . '/../controllers/DbManager.php';

$db_instance = new DbManager();

$titolo = $_REQUEST['elimina'];
$titolo = str_replace('_', ' ', $titolo);

//cancellazione prog_film
$id_film = $db_instance->select(array('id'), 'film', "titolo = '$titolo'")->fetch_array();
$id_film = $id_film['id'];

$result = $db_instance->queryString("DELETE FROM prog_film WHERE id_film = '$id_film'");

//cancellazione film
$result = $db_instance->queryString("DELETE FROM film WHERE titolo = '$titolo'");



if ($result) {
    header("location: ../modifica_film.php");
    die();
}


$db_instance->connection->close();
?>