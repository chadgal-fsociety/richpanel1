<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    $con = new mysqli("localhost","root","","richpanel");
    if($con->connect_error){
        die('ERROR: Could not connect. '. $con->connect_error);
    }
    else{
        $stmt = $con->prepare("Select * from userdata where email = ?");
        $stmt->bind_param('s',$email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0)
        {
            $data = $stmt_result->fetch_assoc();
            if($data['password']=== $password) 
            {
                echo "login successful";
            }
            else{
                echo "invalid email";
            }
        }

        
    }

?>