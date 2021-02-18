<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <!--build:css css/main.css -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="Css/index.css">
    <!--endbuild -->

    <title>Banking System</title>
</head>
<body>
<h3 style="text-align: center;">Customers</h3>
<div class="row row-content">
    <div class="col-12 col-sm-10 offset-1">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Account_Number</th>
                    <th>Branch_Name</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Balance</th>
                    <th>Transfer Money</th>
                </tr>
            </thead>

            <?php
            
            $conn = mysqli_connect ("localhost:3306","root","","customer");
            if ($conn-> connect_error){
                die("Connection failed:".$conn-> connect_error);
            }

            $sql = "SELECT id, account_number, branch_name, username, email , city, balance from users";
            $result = $conn-> query($sql);

            if($result-> num_rows > 0){
                while($row = $result-> fetch_assoc()){
                    echo "<tr><td>" .$row["id"] ."</td><td>" .$row["account_number"] ."</td><td>" .$row["branch_name"] ."</td><td>" .$row["username"]
                    ."</td><td>" .$row["email"] ."</td><td>" .$row["city"] ."</td><td>" .$row["balance"] ."</td><td>" .'<a href="./transaction.php" ><button class="btn btn-secondary">Transfer</button></a>' ."</td></tr>";
                }
                echo "</table>";
            }
            else {
                echo "No results";
            }
            
            $conn-> close();

            ?>
        </table>
        </div>
        </div>
</body>
</html>