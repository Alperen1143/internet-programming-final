<?php 

try {
    $conn = new PDO("mysql:host=127.0.0.1;dbname=haber;charset=utf8", 'root', '123hey123');
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
  }
?>