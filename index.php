<?php 

    $servername = "us-cdbr-iron-east-03.cleardb.net";
    $username = "b435fd5a3df40e";
    $password = "ff1a102b";
    $database = "heroku_93a392319043be9";
   //mysql://b435fd5a3df40e:ff1a102b@us-cdbr-iron-east-03.cleardb.net/heroku_93a392319043be9?reconnect=true
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        echo "database connection was successful";
    }

    //include_once("home.html");

?>
