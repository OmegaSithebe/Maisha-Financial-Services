<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maisha Financial Services - Principle</title>
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
                        <div class="principleSec">
                            <form class="frmPrincipleSec" action="" method="POST">
                                <label for="">First Name</label><input type="text" name="firstName"><br>
                                <label for="">Last Name</label><input type="text" name="lastName"><br>
                                <label for="">ID number</label><input type="number" name="ID"><br>
                                <label for="">Nationality</label><input type="text" name="nationality"><br>
                                <label for="">Physical Address</label><input type="text" name="physicalAdd"><br>	
                                <label for="">Postal Code</label><input type="number" name="postalCode"><br>
                                <label for="">Title</label><input type="text" name="title"><br>	
                                <label for="">Gender</label><input type="text" name="gender"><br>
                                <label for="">Marital Status</label><input type="text" name="maritalStat"><br>
                                <label for="">Country Birth</label><input type="text" name="countryBth"><br>
                                <label for="">Email Address</label><input type="text" name="emailAdd"><br>
                                <label for="">Cellphone Number</label><input type="number" name="cellphone"><br>
                            </form>
                            <button class="btnPrinc">Save</button>
                            <button class="btnPrinc2">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/script.js"></script>
   </body>
</html>

