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
                
            }
            else{
               
            }
        }

        
    }

?>


<?php
    $con = new mysqli("localhost","root","","richpanel");
    if($con->connect_error){
        die('ERROR: Could not connect. '. $con->connect_error);
    }
   
    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing and Subscription </title>
    <link rel="stylesheet" href="subscription.css">



    
</head>
<body>
    

    <div class="parentDiv">
        <!--All the action are done on/by this div-->
        <div class="mainDiv">
            <div class="topDiv" >
                <h1>Choose the right plan for you</h1>
            </div>

            <div class="middleDiv"> 
                <div class="selectorDiv" >
                    
                    <div id="fieldHead">

                    <input type="checkbox" id="switch" /><label for="switch">
                        <span style="    position: absolute; top: 30%; left: 15%; color: white; ">
                        Monthly  &nbsp &nbsp&nbsp &nbsp&nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp  Yearly
                    </span></label>
                    
                    </div>
                    <div class="checkBtnDiv">
                       
                        <div style="width: 100px; height: 100px; background-color: #7994bd; display: flex; flex-wrap: wrap; align-content: center; justify-content: center;  color: white;">
                            
                            <p>Mobile</p>
                        </div> 

                    </div>
                    <div class="checkBtnDiv">
                        <div style="width: 100px; height: 100px; background-color: #7994bd; display: flex; flex-wrap: wrap; align-content: center; justify-content: center; color: white;">
                            <p>Basic</p>
                        </div>
                    </div>
                    <div class="checkBtnDiv">
                        <div style="width: 100px; height: 100px; background-color: #7994bd; display: flex; flex-wrap: wrap; align-content: center; justify-content: center; color: white;">
                            <p>Standard</p>
                        </div>
                    </div>
                    <div class="checkBtnDiv">
                        <div style="width: 100px; height: 100px; background-color: #7994bd; display: flex; flex-wrap: wrap; align-content: center; justify-content: center; color: white;">
                            <p>Premium</p>
                        </div>
                    </div>
                    

                </div>

                <script>
            var checkbox =document.getElementById('switch');
            checkbox.addEventListener( "change", () => {
            if ( checkbox.checked ) {
                <?php 
                    $rowname = 'MonthyCharge';
                    ?>
                
                
            }
            else{
                <?php 
                   $rowname = "YearlyPlan";
                ?>
                }
            }
            );
        </script>


                <div class="tableDiv">
                    
                    <table>
                        <tbody style="width: 90%; margin: 0 auto;">
                        
                        <tr class="checkBtnDiv1" id='helo' >
                            <td class="a">Monthly price</td>
                            <td > 
                            <?php
                            $stmt = $con->prepare("Select * from plans where PlanType = 'Mobile'");
                            $stmt->execute();
                            $result = $stmt->get_result();
                              while($rows=$result->fetch_assoc())
                                {
                                    echo "₹ ". $rows[$rowname];
                                }
                                ?> </td>
                            <td > 
                            <?php
                            $stmt = $con->prepare("Select * from plans where PlanType = 'Basic'");
                            $stmt->execute();
                            $result = $stmt->get_result();
                              while($rows=$result->fetch_assoc())
                                {
                                    echo "₹ ". $rows[$rowname];
                                }
                                ?> </td>
                            <td > 
                            <?php
                            $stmt = $con->prepare("Select * from plans where PlanType = 'Standard'");
                            $stmt->execute();
                            $result = $stmt->get_result();
                              while($rows=$result->fetch_assoc())
                                {
                                    echo "₹ ". $rows[$rowname];
                                }
                                ?> </td>
                            <td > 
                            <?php
                            $stmt = $con->prepare("Select * from plans where PlanType = 'Premium'");
                            $stmt->execute();
                            $result = $stmt->get_result();
                              while($rows=$result->fetch_assoc())
                                {
                                    echo "₹ ". $rows[$rowname];
                                }
                                ?> </td>
                           
                        </tr>
                        <tr class="checkBtnDiv1">
                            <td class="a">Video Quality</td>
                            <td> Good</td>
                            <td> Good </td>
                            <td> Better </td>
                            <td> Best </td>
                        </tr>
                        <tr class="checkBtnDiv1">
                            <td class="a">Resolution</td>
                            <td> 480p </td>
                            <td> 720p </td>
                            <td> 1080p </td>
                            <td> 4K+HDR </td>
                        </tr>
                        <tr class="" id = "special">
                            <td class="a" >Device you can use to watch</td>
                            <td> <ul><li>Phone</li></ul> </td>
                            <td> 
                               <ul>
                                <li>Phone</li>
                                <li>Tablet</li>
                                </ul>
                            </td>
                            <td> 
                               <ul>
                                <li>Phone</li>
                                <li>Tablet</li>
                                <li>Computer</li>
                                </ul>
                            </td>
                            <td> 
                               <ul>
                                <li>Phone</li>
                                <li>Tablet</li>
                                <li>TV</li>
                                </ul>
                            </td>
                            
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="bottomDiv">
                <button id="btn" onclick="location.href = '../payment/payment.html';" type="button">NEXT</button>
            </div>

        </div>

    </div>
    
</body>
</html>