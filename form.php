<?php 
    //Start session
    session_start();
    if(isset($_SESSION['users'])) header('Location: dashboard.php');

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
            $_SESSION['users'] = $users;

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
        <title>Form Page - Maisha Financial Services</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body id="loginBody">
        <?php if(!empty($error_message)) { ?>
            <div id="errorMessage">
            <strong>Error:</strong> </p><?= $error_message ?> </p>
            </div>        
        <?php } ?>


        <div class="container">
            <div class="weltext">
                <p>Welcome to Maisha Financial Services.</p>
            </div>
    
            <div class="welcome">
                <div class="leftimg">
                    <img src="images/Maisha FS.jpg" alt="Maisha Financial Services Images" style="width: 4cm; height: 4cm;">
                </div>
    
                <div class="rightp">
                    <p>Call: +27(0) 66 543 5392 <br>
                        Email: admin@maishafinancialservices.co.za</p>
                </div>    
            </div>
    
            <nav class="navbar">          
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="services.php">Our Service</a></li>
                    <li><a href="form.php">Form</a></li>
                </ul>
            </nav>

            <div class="container2">
                <div class="loginHeader">
                    <h1 class="logH1">Maisha Financial Services</h1>
                    <p class="logP">Login details:</p>
                </div>

                <div class="loginBody">
                    <form action="form.php" method="POST">
                        <div class="inputContainer">
                            <label for="">Username</label>
                            <input placeholder="username" name="username" type="text">
                        </div>
                        <div class="inputContainer">
                            <label for="">Password</label>
                            <input placeholder="password" name="password" type="password">
                        </div>
                        <div class="loginBtnContainer">
                            <button>login</button>
                        </div>
                    </form>
                </div>
            </div>


            <div class="reach">
                <div class="one">
                    <div class="imgMaisha">
                        <img  src="images/Maisha FS2.jpg" alt="Maisha Financial Services" style="width: 3cm; height: 3cm">
                    </div>

                    <div class="other">
                        <img src="images/location.svg" alt="phone logo" style="width: .5cm; height: .5cm"><p class="otherp">96 Fourth Street, Parkmore, Sandton.</p>

                        <img src="images/Phone.svg" alt="phone logo" style="width: .5cm; height: .5cm"> <p class="otherp">(078) 985 8171 / (079) 107 1253</p>

                        <img src="images/WhatsApp.svg" alt="WhatsApp logo" style="width: .5cm; height: .5cm"> <p class="otherp">(066) 534 5392</p>

                        <img src="images/mail.svg" alt="email logo"style="width: .5cm; height: .5cm"> <p class="otherp">admin@maishafinancialservices.co.za</p>

                        <img src="images/internet.svg" alt="web logo"style="width: .5cm; height: .5cm"> <p class="otherp">www.maishafinancialservices.co.za</p>

                        <img src="images/instagram.svg" alt="web logo"style="width: .5cm; height: .5cm"> <p class="otherp">Maisha_fs</p>

                        <img src="images/facebook.svg" alt="web logo"style="width: .5cm; height: .5cm"> <p class="otherp">Maisha Financial Services</p>
                    </div>
                </div>

                <div class="two">
                    <h1 class="reach_h1">Reach us:</h1>
                    <h2 class="reach_h2"><a href="about.html">About Us</a></h2>
                    <h2 class="reach_h2"><a href="serviced.html">Our Service</a></h2>
                    
                    <p>Explore Us <br>
                        Head to the Form page to register.</p>
                </div>

                <div class="three">
                    <form action="">
                        
                        <label class="reach_label" for="">If you have any comments,<br>leave us a message below:</label>
                        <textarea class="reach_area" name="" id="" cols="20" rows="8" placeholder="I would..."></textarea>

                        <label class="reach_label2" for="">Name</label>
                        <input class="reach_input" type="text" id="name" name="name" placeholder="Name">

                        <button class="reach_send">Send</button>
                    </form>

                </div>                           
            </div>

            <hr>

            <div class="last">
                <p class="lastImg"><img class="lastImg2" src="images/ceee.jpg" alt="C sign" style="width: .5cm; height: .5cm">Maisha FInancial Services. All rights Reserved.</p>	
                <ul class="lastPoint">
                    <li>Legal</li>
                    <li>Stemap Privacy </li>
                    <li>Policy</li>
                </ul> 
            </div>

        </section>
    </div>
        </div>
    </body>
</html>