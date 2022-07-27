<?php 
    //Start session
    session_start();
    if(!isset($_SESSION['principle'])) header('Location: dashboard.php');

    $user = $_SESSION['user'];

	$error_message = '';
    
    if($_POST){
        include('database/connection.php');

        $username = $_POST['username'];
        $password = $_POST['password'];

       $query = 'SELECT * FROM users WHERE users.emailAddress="' . $username .'" AND users.password="'. $password .'"';
       $stmt = $conn->prepare($query);
       $stmt->execute();

  

       if($stmt->rowCount() > 0){
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $user =$stmt->fetchAll()[0]; 
            $_SESSION['user'] = $user;

            header('Location: dashboard.php');
       }else $error_message = 'Please make sure Username & Password are correct.';
        
    }

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maisha Financial Services - Children</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
</head>
    <body>
        <div id="dashboardContainer">
            <?php include('partials/app-sidebar.php') ?>
            <div class="dashboardContent" id="dashboardContent">
                 <?php include('partials/app-topNav.php') ?>
                <div class="dashboard_content">
                    <div class="dashboard_contentMenu">
                        <div class="childrenSec"> 
                            <form class="frmChildrenSec" action="" method="POST">
                                <label for="">Principle ID number</label><input type="text" name="principleID"><br>
                                <label for="">Spuose Family</label><input type="text" name="spuoseFamily"><br>
                                <label for="">First Name</label><input type="text" name="firstName"><br>
                                <label for="">Last Name</label><input type="text" name="lastName"><br>
                                <label for="">ID Number</label><input type="text" name="ID"><br>
                                <label for="">Relationship to Main</label><input type="text" name="relationToMain"><br>	
                            </form>
                            <button class="btnChildAdd">Add</button>
                            <button class="btnChildAdd">Done</button>

                            <button class="btnChild">Save</button>
                            <button class="btnChild2">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/script.js"></script>
   </body>
</html>
