<?php
require_once __DIR__ . '/../controllers/DbManager.php';

$db_instance = new DbManager();

if($_REQUEST['modifica']){
    $titolo = $_REQUEST['modifica'];
}else if($_REQUEST['acquista']){
    $titolo = $_REQUEST['acquista'];
}

$titoloFilm = str_replace('_', ' ', $titolo);

//trova l'id del film
$id_film = $db_instance->select(array('id'), 'film', "titolo = '$titoloFilm'")->fetch_array();
$id_film = $id_film['id'];

//trova l'id degli orari e delle sale del film
$resultOrariSale = $db_instance->select([], 'prog_film', "id_film = '$id_film'")->fetch_array();
$id_orari = $resultOrariSale['id_orari'];
$id_sale = $resultOrariSale['id_sale'];

//orari e sale del film
$resultOrari = $db_instance->select([], 'orari', "id_orari = '$id_orari'")->fetch_array();
$resultSale = $db_instance->select([], 'sale_film', "id = '$id_sale'")->fetch_array();

$db_instance->connection->close();

?>