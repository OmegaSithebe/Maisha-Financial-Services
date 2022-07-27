<?php 
    //Start session
    session_start();
    if(!isset($_SESSION['user'])) header('location: index.php');

    $user = $_SESSION['user'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maisha Financial Services - Dashboard</title>
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
                    <div class="dashboard_contentMenu"></div>
                </div>
            </div>
        </div>
        <script src="js/script.js"></script>
   </body>
</html>
