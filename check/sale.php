<?php
require_once __DIR__ . '/../controllers/DbManager.php';
require_once __DIR__ . '/../controllers/SessionManager.php';

$db_instance = new DbManager();

//recupero id sale
$id_sale = $_REQUEST['id_sale'];

//recupero id film
$id_film = $db_instance->select(array('id'), 'film', "titolo = '$titolo_film'")->fetch_array();
$id_film = $id_film['id'];

$primaSala = filter_input(INPUT_POST, 'sala1');
$secondaSala = filter_input(INPUT_POST, 'sala2');
$terzaSala = filter_input(INPUT_POST, 'sala3');

if ($id_sale) {
    $result = $db_instance->update('sale_film', "id_prima = '$primaSala', id_seconda = '$secondaSala', id_terza = '$terzaSala'", "id = '$id_sale'");
    header("location: ../modifica_film.php");
}else{
    //inserimento nella tabella sale
    $sale = $db_instance->insert('sale_film', array('id_prima', 'id_seconda', 'id_terza'), array($primaSala, $secondaSala, $terzaSala));

    //recupero id della riga inserita
    $new_id_sale = $db_instance->queryString("SELECT MAX(id) FROM sale_film")->fetch_array();
    $new_id_sale = $new_id_sale['MAX(id)'];

    //inserimento id nella tabella prog_film
    $result = $db_instance->insert('prog_film', array('id_film','id_sale'), array($id_film, $new_id_sale));

    header("location: ../modifica_film.php");

}

$db_instance->connection->close();

?>
