<?php
require_once __DIR__ . '/../controllers/DbManager.php';

$db_instance = new DbManager();

$titolo = $_REQUEST['elimina'];
$titolo = str_replace('_', ' ', $titolo);

//recupero id film
$id_film = $db_instance->select(array('id'), 'film', "titolo = '$titolo'")->fetch_array();
$id_film = $id_film['id'];

//recupero id orari e sale
$id = $db_instance->select(array('id_orari', 'id_sale'), 'prog_film', "id_film = '$id_film'")->fetch_array();
$id_orari = $id['id_orari'];
$id_sale = $id['id_sale'];

//cancellazione programmazione orari e sale del film
$result = $db_instance->queryString("DELETE FROM prog_film WHERE id_film = '$id_film'");

//cancellazione orari del film
$result = $db_instance->queryString("DELETE FROM orari WHERE id_orari = '$id_orari'");

//cancellazione sale del film
$result = $db_instance->queryString("DELETE FROM sale_film WHERE id = '$id_sale'");

//cancellazione film
$result = $db_instance->queryString("DELETE FROM film WHERE titolo = '$titolo'");




if ($result) {
    header("location: ../modifica_film.php");
    die();
}


$db_instance->connection->close();
?>