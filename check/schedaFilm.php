<?php
require_once __DIR__ . '/../controllers/DbManager.php';

$titoloFilm = $_REQUEST['film'];
$replace_titolo = str_replace('_', ' ', $titoloFilm);

$db_instance = new DbManager();

$resultFilm = $db_instance->select([], 'film', "titolo = '$replace_titolo'")->fetch_array();

$db_instance->connection->close();

?>