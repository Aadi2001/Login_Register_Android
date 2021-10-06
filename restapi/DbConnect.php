
<?php
  
  // Server name must be localhost
  $servername = "localhost";
  $username = "aditya";
  $password = "123456";
  $database = "restapi";
  // Creating a connection
  $conn = new mysqli($servername, 
              $username, $password, $database);
    
  // Check connection
  if ($conn->connect_error) {
      die("Connection failure: ". $conn->connect_error);
  } 
  // Closing connection
//   $conn->close();
  ?>