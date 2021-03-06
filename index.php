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
    <nav class="navbar navbar-dark navbar-expand-sm  fixed-top">
        <div class="container">
            <a class="navbar-brand " href="#"><img src="Images/logo.png" height="70px" width="70px"></a>
            <div class="navbar ml-auto" id="Nav">
                <ul class="navbar-nav ">
                    <li class="nav-item active"><a style="color:black;" class="nav-link" href="#"><span
                                class="fa fa-home"></span> Home</a>
                    </li>
                    <li class="nav-item "><a style="color:black;" class="nav-link" href="./about.html"><span
                                class="fa fa-info"></span> About Us</a></li>
                    <li class="nav-item "><a style="color:black;" class="nav-link" href="./contact.html"><span
                                class="fa fa-address-card"></span> Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-5 offset-1" >
                    <div id="banner">                  
                        <h1>Welcome to TSF BANK</h1>
                        <p>Money transfer made easy with TSF!!</p>
                    </div>
                </div> 
                <div class="col-12 col-sm-6">
                    <img src="Images/illus3.png" height="500px" width="500px">
                </div>                  
            </div>
        </div>
    </header>  
    <div class="container">
        <div class="row row-content ">
            <div class= "col-12 col-sm-12">               
                    <div id="customers">
                        <a href= "./customer.php" style ="text-decoration: none;"><button class="btn1">View Customers</button></a>             
                    </div>               
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row ">
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="./about.html">About</a></li>
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