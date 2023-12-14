<?php

// With this function it makes it possibe to connect with the database.
// First I define the variables needed for the connection.
// I used pdo cause I learned this on my other study and I thought it was easier than MySqli.
// By returning the $conn, you can make a connection with the database by calling it.

function ConnectToDatabase()
{  
  $servername = "192.168.101.47";
  $username = "testuser";
  $password = "dany7828";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=smarthome", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

  return $conn;
}

?>