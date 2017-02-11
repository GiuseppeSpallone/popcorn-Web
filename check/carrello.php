<?php
require_once '../controllers/DbManager.php';

$db_instance = new DbManager();

//conta gli elementi nel carrello da far visualizzare sulla navbar
$countElementi = mysqli_num_rows($db_instance->select([], 'carrello'));

$db_instance->connection->close();
?>
