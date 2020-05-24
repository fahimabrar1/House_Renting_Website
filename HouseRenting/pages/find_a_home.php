<?php
    require_once("../php/connect.php");
?>
<?php
    require_once("../php/searchpages.php");
?>
<?php
    require("../php/page.php");
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
    <link rel="stylesheet" href="../style/for_home.css">
    <title>House Rent</title>
</head>

<body>
    <!-- NAVBAR -->
    <div class="body_top">
        <div class="mynav">
            <nav class="navbar navbar-expand-lg navbar-light" style="margin-bottom: 0px">
                    <a class="navbar-brand text-white" href="../pages/index.php"> <img src="../resources/HouseRenting.png" alt="#">
                    <h5>HOUSE RENT</h5>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">

                        <?php
                            echo   "<li class=\"nav-item active\">
                            <a class=\"nav-link text-white\" href=\"../pages/index.php\">Home <span class=\"sr-only\">(current)</span></a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link text-white\" href=\"#\">Find a Home</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link text-white\" href=\"../pages/Post_for_rent.php\">Post For Rent</a>
                        </li>";
                         if(isset($_SESSION['email'])){
                                 echo "
                            <li class=\"nav-item\">
                                <a class=\"nav-link text-white\" href=\"../php/logout.php\">Log out</a>
                            </li>
                            ";
                            }else{
                        echo   "<li class=\"nav-item\">
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
        </div>
    </div>
    <!-- NAVBAR END -->

    <!-- Body Content START -->
    <div class="body-content">
        <div class="jumbotron jumbotron-fluid">
            <div class="container" id="main">
                <div class="row justify-content-md-center">
                    <div class="body-content col-sm-10">
                        <form action="">
                            <div class="realestate-tabpane">
                                <div class="container tab-content">
                                    <div class="tab-pane active" id="for-rent" role="tabpanel" aria-labelledby="rent-tab">

                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <select name="" id="" class="form-control w-100">
                                                    <option value="">All Types</option>
                                                    <option value="">Townhouses</option>
                                                    <option value="">Duplexes</option>
                                                    <option value="">Quadplexes</option>
                                                    <option value="">Condominiums</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <input type="text" class="form-control" placeholder="Title">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <input type="text" class="form-control" placeholder="Address">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <select name="" id="" class="form-control w-100">
                                                    <option value="">Any Bedrooms</option>
                                                    <option value="">0</option>
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3+</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <select name="" id="" class="form-control w-100">
                                                    <option value="">Any Bathrooms</option>
                                                    <option value="">0</option>
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3+</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <select name="" id="" class="form-control w-100">
                                                            <option value="">Min Price</option>
                                                            <option value="">$100</option>
                                                            <option value="">$200</option>
                                                            <option value="">$300</option>
                                                            <option value="">$400</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <select name="" id="" class="form-control w-100">
                                                            <option value="">Max Price</option>
                                                            <option value="">$25,000</option>
                                                            <option value="">$50,000</option>
                                                            <option value="">$75,000</option>
                                                            <option value="">$100,000</option>
                                                            <option value="">$100,000,000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="search" class="btn btn-danger py-3 btn-block" value="Search">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>



        <div class="site-section bg-black">
            <div class="container">
                <div class="row">


                    <?php
                        getpage("../resources/img_1.jpg","2911 Sq Ft.","2.","2.","$570,000","156/10 Sapling Street, Harrison, ACT 2914");
                    ?>
                    <?php
                        search($htres,$presult);
                    ?>
<!--
                    <?php
                        getpage("../resources/img_2.jpg","2911 Sq Ft.","2.","2.","$1570,000","156/10 Sapling Street, Harrison, ACT 2914");
                    ?>

                    <?php
                        getpage("../resources/img_3.jpg","2911 Sq Ft.","2.","2.","$2570,000","156/10 Sapling Street, Harrison, ACT 2914");
                    ?>

                    <?php
                        getpage("../resources/img_2.jpg","2911 Sq Ft.","2.","2.","$570,000","156/10 Sapling Street, Harrison, ACT 2914");
                    ?>
                    <?php
                        getpage("../resources/img_1.jpg","2911 Sq Ft.","2.","2.","$3570,000","156/10 Sapling Street, Harrison, ACT 2914");
                    ?>
                    <?php
                        getpage("../resources/img_1.jpg","2911 Sq Ft.","2.","2.","$1570,000","156/10 Sapling Street, Harrison, ACT 2914");
                    ?>

                    <?php
                        getpage("../resources/img_2.jpg","2911 Sq Ft.","2.","2.","$570,000","156/10 Sapling Street, Harrison, ACT 2914");
                    ?>

                    <?php
                        getpage("../resources/img_3.jpg","2911 Sq Ft.","2.","2.","$570,000","156/10 Sapling Street, Harrison, ACT 2914");
                    ?>

                    <?php
                        getpage("../resources/img_2.jpg","2911 Sq Ft.","2.","2.","$1570,000","156/10 Sapling Street, Harrison, ACT 2914");
                    ?>
-->

                </div>
            </div>
        </div>

    </div>
    <!-- Body Content END -->




    <!-- Footer START-->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="logo">
                                <a class="navbar-brand text-white" href="#"> <img src="../resources/HouseRenting.png" alt="#">
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
                            <a href="#" class="text-white">Contact</a>
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
