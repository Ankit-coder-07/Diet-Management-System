<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details</title>

    <!--link- style sheets-->
<link rel="stylesheet" href="../css/payment.css">

    

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<br><br><br><br><br><br><br><br><br><br><br><br>

<style> 
body{
	background-image: url("../images/payment1.jpg");
	background-size: cover;
	background-repeat: no-repeat;
	height: 100%;
}
</style>

</head>
<body>
    <!--header section starts-->
<header>
    <div id="menu-bar" class="fas fa-bars"></div>
    <td width="500" height="150"><p align="left"><img src="../Img/logo.png" width="100" height="50" alt=""></p></td>

    <nav class="navbar">
        <a href="../index.html">Home</a>
        <a href="../html/about us.html">About us</a>
        <div class="dropdown">
            <button class="dropbtn">services
                <i class="fa fa-caret-down"></i>
            </button>  
            <div class="dropdown-content">
                
                <li type="none"><h1>Customer committment</h1></li>
                <a href="./customer service  plan.html">Customer service plan</a>
                
                <li type="none"><h1>Special Assistance</h1></li>
               
                <a href="./medical-information.html">medical Information</a>
                <a href="./Online Mobile checking.html">Telemedicine</a>
                <a href="./Healthcheckup.html">Health Check_up</a>
                <a href="./Dietplan.html">Diet Plan</a>
    
    
    
            </div></div>
        
    <div class="dropdown">
        <button class="dropbtn">payment
            <i class="fa fa-caret-down"></i>
        </button>  
        <div class="dropdown-content">
       
            <li type="none"> <h1>Payment Option</h1></li>
            <a href="../html/payment.html">Online and offline payment option</a>
            <a href="../html/voucher.html">Confirm Your Payment</a>
           
        </div>
    </div>

        <a href="../html/Contact us.html">Contact Us</a>
        <a href="../html/feedback.html">Feedback</a>
    </nav>
<div class="icons">
        <i class="fas fa-search" id ="search-btn"></i>
        <i class="fas fa-user" id ="login-btn"></i>
        
    </div>
       <form action=""class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here">
        <label for="search-bar" class="fas fa-search"></label>
       </form> 
        
</header>
<!--header section ends-->
<h1>Payment Details</h1><br>

<div class="container my-5">
    <br>
    <table class="table">
        <thead>
            <tr>
                <td>Payid</td>
                <td>fullname</td>
                <td>email</td>
                <td>Address</td>
                <td>city</td>
                <td>state</td>
                <td>zipcode</td>
                <td>ownername</td>
                <td>cardno</td>
                <td>month</td>
                <td>year</td>
                <td>cvv</td>
            </tr>
        </thead> 
        <tbody>
            <?php
           require 'connection.php';
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } else {
                //echo "Connected successfully";
            }
            //read all row from databse table
            $sql = "SELECT * FROM payment_details";
            $result = $conn->query($sql);
            if (!$result) {
                die("Invalid query: " . $conn->error);
            }

            // read data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["Payid"] . "</td>
                    <td>" . $row["fullname"] . "</td>
                    <td>" . $row["email"] . "</td>
                    <td>" . $row["Address"] . "</td>
                    <td>" . $row["city"] . "</td>
                    <td>" . $row["state"] . "</td>
                    <td>" . $row["zipcode"] . "</td>
                    <td>" . $row["ownername"] . "</td>
                    <td>" . $row["cardno"] . "</td>
                    <td>" . $row["month"] . "</td>
                    <td>" . $row["year"] . "</td>
                    <td>" . $row["cvv"] . "</td>

                    <td>
                        <a class='btn btn-danger btn-sm' href='./paymentdelete.php?Payid=$row[Payid];'>Delete</a>
                    </td>
                </tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
 
</div>

<br><br><br><br><br><br><br><br><br><br>
<!--footer section start-->
<section class="footer"> 

    <div class="box-container">

        <div class="box">
                <h3>About us</h3>
                <a href="./about us.html">About us</a>
                <a href="#">Our community</a>
                <a href="#">Careers</a>
        </div>
        <div class="box">
                <h3>Help</h3>
                <a href="./Contact us.html">24 hours contact center</a>
                <a href="#">FAQs</a>
        </div>
        <div class="box">
            <h3>Terms and Conditions</h3>
            <a href="#">Online Banking Teams of use</a>
            <a href="#">Notice</a>
        </div>
        <div id="social-links" class="box">
            <h3>Follow us</h3>
              
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                    
        </div>
    </div>
        <h1 class="credit"><span>@ 2024 All Rights Reseverd </span></h1>
</section>


<!--footer section end-->




</body>
</html>