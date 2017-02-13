<?php
require_once __DIR__ . '/../controllers/DbManager.php';

$db_instance = new DbManager();

$titolo = $_REQUEST['modifica'];
$titolo = str_replace('_',' ',$titolo);



$db_instance->connection->close();
?>