<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

 
/* Attempt to connect to MySQL database */

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$sub = 'basic';
$active = 1;
$con = new mysqli('localhost', 'root', '','richpanel');
 
// Check connection
if($con->connect_error){
    die('ERROR: Could not connect. '. $con->connect_error);
}
else{
    $stmt = $con->prepare("insert into userdata values(?,?,?,?,?)");

    $stmt->bind_param("ssssi",$name,$email,$password,$sub,$active);
    $stmt->execute();
    
    $stmt->close();
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to richPanel</title>

    <!--css file used-->
    <link rel="stylesheet" href="login.css">


    <!--custom font used-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
    <!--------------------->

</head>
<body>
    
    <div class="parentDiv">

        <!--All the action are performed on this div tag-->
        <div class="mainDiv">
            <div class = "title">
                <h1 id="heading1">Login to your account</h1>
            </div>
            <div>
            <form action="../subscription/subscription.php" method="post">
            <div class="Fields">
                
                    <label class="label1" for="Email" style="text-align: left;" >Email</label><br>
                    <input  class="inputfields" type="email"  name="email" placeholder="Email" required>
                    <br>
                    <label class="label1" for="passwd"  style="text-align: left;" >Password</label><br>
                    <input  class="inputfields" type="password" name="password" placeholder="Password" required>
                
            </div>
            <div style="width: 76%; height: 20px; margin: 0 auto;  padding-bottom: 8%; ">
                
                <input title="box" type="checkbox"><label for="box" name="rememberme" style="font-size: 14px; text-align: left;"> Remember Me</label>
            </div>
            <div class="submitBtn ">
               
               <button id="loginBtn" type="submit">Login</button>
                
            </div>
        </form>
        </div>

            <div class="footer">
                <p>New to MyApp?<a href="../index.php"> Sign Up</a></p>
            </div>
           
        </div>
    </div>
    
</body>
</html>