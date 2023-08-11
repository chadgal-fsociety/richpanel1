
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to richPanel</title>

    <!--css file used-->
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>

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
                <h1 id="heading1">Create Account</h1>
            </div>
            <div>
            <form action="login/login.php" method="post">
            <div class="Fields">
                
                    <label class="label1" for="name" name="name">Name</label><br>
                    <input class="inputfields" name="name" type="text" placeholder="Name" required>
                    <br>
                    <label class="label1" for="Email" name="email" style="text-align: left;" >Email</label><br>
                    <input  class="inputfields" type="email" name="email" placeholder="Email" required>
                    <br>
                    <label class="label1" for="passwd" name="password" id=password style="text-align: left;" >Password</label><br>
                    <input  class="inputfields" type="password" name="password" placeholder="Password" required>
               
                
            </div>
            <div style="width: 100%; height: 20px; margin: 0 auto;  padding-bottom: 8%; ">
                
                <input title="box" type="checkbox"><label for="box" name="rememberme" style="font-size: 14px; text-align: left;"> Remember Me</label>
            </div>
            <div class="submitBtn ">
               
               <button id="signupBtn" type="submit">Sign Up</button>
                
            </div>
        </form>
        </div>


            <div class="footer">
                <p>Already have an account?<a href="login/login.php"> Login</a></p>
            </div>
           
        </div>
    </div>
    
</body>
</html>

