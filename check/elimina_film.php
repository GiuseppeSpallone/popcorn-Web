<?php
require_once __DIR__ . '/../controllers/DbManager.php';

$db_instance = new DbManager();

$titolo = $_REQUEST['elimina'];
$titolo = str_replace('_', ' ', $titolo);

$result = $db_instance->queryString("DELETE FROM film WHERE titolo = '$titolo'");


$db_instance->connection->close();
?>