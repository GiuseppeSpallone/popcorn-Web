<?php
require_once '../controllers/DbManager.php';

$db_instance = new DbManager();

$countElementi = mysqli_num_rows($db_instance->select([], 'carrello'));

$db_instance->connection->close();
?>
