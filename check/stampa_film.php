<?php
require_once __DIR__ . '/../controllers/DbManager.php';

$db_instance = new DbManager();

$result = $db_instance->select(array('titolo'), 'film');

$db_instance->connection->close();
?>