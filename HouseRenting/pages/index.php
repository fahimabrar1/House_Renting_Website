<?php
    require_once("../php/connect.php");
?>
<?php
    require_once("../php/login.php");
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0f3c87c679.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/home_style.css">
    <title>House Rent</title>
</head>

<body>
    <!-- NAVBAR -->
    <div class="body_top">
        <div class="mynav">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="row pl-4">
                    <a class="navbar-brand text-white" href="../pages/index.php"> <img src="../resources/HouseRenting.png" alt="#">
                        <h5>HOUSE RENT</h5>
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">

                        <?php                                             
                    echo "
                        <li class=\"nav-item active\">
                            <a class=\"nav-link text-white\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link text-white\" href=\"../pages/find_a_home.php\">Find a Home</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link text-white\" href=\"../pages/Post_for_rent.php\">Post For Rent</a>
                        </li>
                    ";
                             if(isset($_SESSION['email'])){
                                 echo "
                            <li class=\"nav-item\">
                                <a class=\"nav-link text-white\" href=\"../php/logout.php\">Log out</a>
                            </li>
                            ";
                            }else{
                    echo " <li class=\"nav-item\">
                            <a class=\"nav-link text-white\" href=\"../pages/Sign_up.php\">Sign Up</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link text-white\" href=\"../pages/log_in.php\">Log In</a>
                        </li>";
                             }
                ?>
                    </ul>
                </div>
            </nav>
            <!-- NAVBAR END -->


            <section class="hero-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="hero-text">
                                <div class="hero-text-cont">
                                    <h1>House Renting</h1>
                                    <p>Here we provide the the best home for you in the most affordable price and luxury place</p>
                                </div>
                                <a href="../HouseRenting/pages/find_a_home.php" class="btn btn-danger">Discover Now</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 offset-xl-2 offset-lg-1">
                            <?php
                            
                            if(isset($_SESSION['email'])){
                                echo "<div class=\"hero-text-cont\">
                                            <h1>WELCOME !!</h1>
                                            <p class=\"lead\">We have listed some 
                                            beautiful houses for you.</p>
                                        </div>";
                            }else{
                                echo " <form  action=\"";
                                echo $_SERVER["PHP_SELF"];
                                echo "\"";
                                echo " method=\"post\" class=\"Login-form mt-2\">
                            <div class=\"form-group row\">
                                <label for=\"staticEmail\" class=\"col-sm-2 col-form-label\">Email</label>
                                <div class=\"col-sm-10\">
                                    <input name=\"email\" type=\"email\" class=\"form-control\" id=\"inputemail\" placeholder=\"Email\">
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label for=\"inputPassword\" class=\"col-sm-2 col-form-label\">Password</label>
                                <div class=\"col-sm-10\">
                                    <input name=\"password\" type=\"password\" class=\"form-control\" id=\"inputPassword\" placeholder=\"Password\">
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <button name=\"login\" type=\"submit\" class=\"btn btn-secondary btn-danger btn-block\">Log In</button>
                            </div>
                            </form>";
                            }

                            ?>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


    <!-- Footer START-->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="logo">
                                <a class="navbar-brand text-white" href="../HouseRenting/index.php"> <img src="resources/HouseRenting.png" alt="#">
                                    <h5>HOUSE RENT</h5>
                                </a>
                            </div>
                            <p class="text-white">We inspire and reach millions of people</p>

                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-contact">
                            <h6 class="text-white">Contact Us</h6>
                            <ul>
                                <li class="text-white">(12) 345 67890</li>
                                <li class="text-white">info.colorlib@gmail.com</li>
                                <li class="text-white">856 Cordia Extension Apt. 356, Lake, United State</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-newslatter">
                            <h6 class="text-white">New latest</h6>
                            <p class="text-white">Get the latest updates and offers.</p>
                            <form action="#" class="fn-form">
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-outline-secondary bg-warning"><i class="fa fa-send"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-option">
            <div class="container text-white">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="d-inline">
                            <a href="../HouseRenting/pages/contact.php" class="text-white">Contact</a>
                        </div>
                        <div class="d-inline">
                            <a href="#" class="text-white">Terms of use</a>
                        </div>
                        <div class="d-inline">
                            <a href="#" class="text-white">Privacy</a>
                        </div>
                        <div class="d-inline">
                            <a href="#" class="text-white">Enviromental Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
