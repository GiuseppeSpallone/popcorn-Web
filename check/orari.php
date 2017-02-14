<?php
require_once __DIR__ . '/../controllers/SessionManager.php';
require_once __DIR__ . '/../controllers/DbManager.php';

$db_instance = new DbManager();

//recupero id orari
$id_orari = $_REQUEST['id_orari'];

$primoOrario = filter_input(INPUT_POST, 'orario1');
$secondoOrario = filter_input(INPUT_POST, 'orario2');
$terzoOrario = filter_input(INPUT_POST, 'orario3');

if ($id_orari) {
    $result = $db_instance->update('orari', "primo = '$primoOrario', secondo = '$secondoOrario', terzo = '$terzoOrario'", "id_orari = '$id_orari'");
    header("location: ../modifica_film.php");
} else {
    //inserimento nella tabella sale
    $orari = $db_instance->insert('orari', array('primo', 'secondo', 'terzo'), array($primoOrario, $secondoOrario, $terzoOrario));

    //recupero id della riga inserita
    $new_id_orari = $db_instance->queryString("SELECT MAX(id_orari) FROM orari")->fetch_array();
    $new_id_orari = $new_id_orari['MAX(id_orari)'];

    //inserimento id nella tabella prog_film
    $result = $db_instance->insert('prog_film', array('id_orari'), array($new_id_orari));

    header("location: ../modifica_film.php");
}

$db_instance->connection->close();

?>
