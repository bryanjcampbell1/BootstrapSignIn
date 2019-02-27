<?php
  $name = $_GET['x'];
  $pass = $_GET['y'];
  $email = $_GET['z'];


  $host = 'localhost';
  $username = 'root';
  $password = 'root';
  $dbname = 'userData';

  $db = new mysqli($servername, $username, $password, $dbname);

  if($db->connect_errno > 0){
      die('Unable to connect to database [' . $db->connect_error . ']');
  }

  $sql = "INSERT INTO UserInfo (username, password, email) VALUES ('".$name."', '".$pass."', '".$email."')";


  if ($db->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $db->close();



  //echo $email . "Campbell";

?>
