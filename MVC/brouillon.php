<?php

include __DIR__ .'SimpleORM.php';

$conn = new mysqli('localhost', 'root', '');

if ($conn->connect_error)
  die(sprintf('Unable to connect to the database. %s', $conn->connect_error));


  // SimpleOrm:: useConnection($conn, )

?>