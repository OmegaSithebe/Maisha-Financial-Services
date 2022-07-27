<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';

    /*$conn  = new mysqli("localhost", "root", "", "policy") or die("Unable to connect");
    if($conn)
        echo "successfully connected";*/
    
    //Connecting to database
    try {
        $conn = new PDO("mysql:host=$servername;dbname=policy", $username, $password);
        //set the error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (\Exception $e) {
        $error_message = $e->getMessage();
    } 
?>