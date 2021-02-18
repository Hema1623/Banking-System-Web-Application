<?php


/*
if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from users where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



    // To check input of negative value by user
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }


  
    // To check insufficient balance.
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    


    // To check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Zero value cannot be transferred')";
         echo "</script>";
     }


    else {
        
                // deducting amount from sender's account
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$from";
                mysqli_query($conn,$sql);
             

                // adding amount to reciever's account
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                               window.location='thistory.php';
                            </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    

    <!-- Bootstrap CSS -->
    <!--build:css css/main.css -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="Css/index.css">
    <!--endbuild -->

    <style type="text/css">
    	
		button{
			border:none;
			background: #0041C2;
            color: white;
		}
	    button:hover{
			background-color:#777E8B;
			transform: scale(1.1);
			color:white;
		}

    </style>
</head>
<script>
        function myFunction() {
            alert("Transferred Successfully!!");
        }       
</script>
<body>
	<div class="container">
        <h2 style="color : black;">Transfer Your Amount With TSF</h2>                
                                     
        <br><br><br>
        <label style="color:black;"><b>Transfer To:</b></label>
        <select name="to" class="form-control" >
            <option value="" disabled selected>Choose</option>
            <?php            
            $conn = mysqli_connect ("localhost:3306","root","","customer");
            if ($conn-> connect_error){
                die("Connection failed:".$conn-> connect_error);
            }
            $sql = "SELECT id, account_number, branch_name, username, email , city, balance from users";
            $result = $conn-> query($sql);

            if($result-> num_rows > 0){
                while($row = $result-> fetch_assoc()){
            ?>

            <option class="table" value="<?php echo $row['id'];?>" >
                
                (Balance: 
                <?php echo $row['balance'] ;?> ) 
                <?php echo $row['username'] ;?>
           
            </option>
            <?php
                }
            }
            ?>
        </select>
        
        <br>
        <br>   
            <label style="color : black;"><b>Amount:</b></label>
            <input type="number" class="form-control" name="amount" required>   
            <br><br>           
                <button class="btn btn-warning" id="myBtn" onclick="myFunction()" style="color:white;">Transfer</button>           
            <br><br>      
    </div>   
    <footer class="footer">
        <div class="container">
            <div class="row ">
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="./contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
                        121, Clear Water Bay Road<br>
                        Clear Water Bay, Kowloon<br>
                        HONG KONG<br>
                        <i class="fa fa-phone"></i> : +852 1234 5678<br>
                        <i class="fa fa-fax"></i> : +852 8765 4321<br>
                    </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="bleh text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i
                                class="fa fa-google-plus"> </i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i
                                class="fa fa-facebook "></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i
                                class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i
                                class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i
                                class="fa fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-auto">
                    <p>© Copyright 2021 THE SPARK FOUNDATION</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/.jspopper/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>

