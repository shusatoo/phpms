<?php

$dsn = 'mysql:dbname=phpms;host=localhost';
$user = 'phpms';
$pass = 'phpms';
$db = null;
try {
    $db = new PDO($dsn, $user, $pass);
} catch (Exception $e) {
    echo $e->getMessage();
}

$sql = 'SELECT id, name FROM test';
foreach ($db->query($sql) as $row) {
    var_dump($row);
}

// end of file
