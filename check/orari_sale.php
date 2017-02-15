<?php
require_once __DIR__ . '/../controllers/DbManager.php';

$db_instance = new DbManager();

$titolo = $_REQUEST['modifica'];
$titolo = str_replace('_', ' ', $titolo);

//recupero id film
$id_film = $db_instance->select(array('id'), 'film', "titolo = '$titolo'")->fetch_array();
$id_film = $id_film['id'];

//recupero id orari e id sale del film
$id= $db_instance->select(array('id_orari', 'id_sale'),'prog_film', "id_film = '$id_film'" )->fetch_array();
$id_orari = $id['id_orari'];
$id_sale= $id['id_sale'];

/*
print_r($id_film);
print_r($id_sale);
print_r($id_orari);
die();
*/

$primoOrario = filter_input(INPUT_POST, 'orario1');
$secondoOrario = filter_input(INPUT_POST, 'orario2');
$terzoOrario = filter_input(INPUT_POST, 'orario3');

$primaSala = filter_input(INPUT_POST, 'sala1');
$secondaSala = filter_input(INPUT_POST, 'sala2');
$terzaSala = filter_input(INPUT_POST, 'sala3');

if ($id_orari || $id_sale) {
    $resultOrari = $db_instance->update('orari', "primo = '$primoOrario', secondo = '$secondoOrario', terzo = '$terzoOrario'", "id_orari = '$id_orari'");
    $resultSale = $db_instance->update('sale_film', "id_prima = '$primaSala', id_seconda = '$secondaSala', id_terza = '$terzaSala'", "id = '$id_sale'");

    header("location: ../modifica_film.php");
    die();

} else {
    //inserimento nella tabella orari
    $orari = $db_instance->insert('orari', array('primo', 'secondo', 'terzo'), array($primoOrario, $secondoOrario, $terzoOrario));

    //recupero id della riga inserita
    $new_id_orari = $db_instance->queryString("SELECT MAX(id_orari) FROM orari")->fetch_array();
    $new_id_orari = $new_id_orari['MAX(id_orari)'];


    //inserimento nella tabella sale
    $sale = $db_instance->insert('sale_film', array('id_prima', 'id_seconda', 'id_terza'), array($primaSala, $secondaSala, $terzaSala));

    //recupero id della riga inserita
    $new_id_sale = $db_instance->queryString("SELECT MAX(id) FROM sale_film")->fetch_array();
    $new_id_sale = $new_id_sale['MAX(id)'];


    //inserimento id nella tabella prog_film
    $result = $db_instance->insert('prog_film', array('id_film', 'id_orari', 'id_sale'), array($id_film, $new_id_orari, $new_id_sale));

    header("location: ../modifica_film.php");
    die();
}
$db_instance->connection->close();

?>
