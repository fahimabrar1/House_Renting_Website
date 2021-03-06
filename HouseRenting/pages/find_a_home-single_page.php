<?php
    require("../php/connect.php");
?>
<?php
      require_once("../php/update_page.php");
?>
<?php
      require("../php/executeupdate.php");
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
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand text-white" href="../pages/index.php"> <img src="../resources/HouseRenting.png" alt="#">
                    <h5>HOUSE RENT</h5>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">

                        <?php 
                            

                            echo "
                        <li class=\"nav-item active\">
                            <a class=\"nav-link text-white\" href=\"../pages/index.php\">Home <span class=\"sr-only\">(current)</span></a>
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
                                <a class=\"nav-link text-white\" href=\"../HouseRenting/php/logout.php\">Log out</a>
                            </li>
                            ";
                            }else{
                        echo "
                        
                        <li class=\"nav-item\">
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
        <div class="ftco-blocks-cover-1">

            <?php
            
            
            $var= "<div class=\"site-section-cover overlay p-5\" data-stellar-background-ratio=\"0.5\" style=\"background-image: url('";

            $var1="')\">";
            $src=$_GET['src'];
            echo $var;
            echo $src;
            echo $var1;
           ?>
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-7">
                        <?php
                            echo "<h1 class=\"mb-2 mt-2\">";
                            $title=$_GET['title'];
                            echo $title;
                            echo "</h1>";
                            ?>
                        <p class="text-center mb-5"><span class="small address d-flex align-items-center justify-content-center"> <span class="icon-room mr-3 text-primary"></span>
                                <?php
                                echo "<span>";
                                $location=$_GET['location'];
                                echo $location;
                                echo "</span>";
                              ?>
                            </span></p>

                        <div class="d-flex media-38289 justify-content-around mb-3">
                            <div class="sq d-flex align-items-center"><i class="fas fa-vector-square pr-1"></i>
                                <?php
                                echo "<span>";
                                $sq=$_GET['sq'];
                                echo $sq;
                                echo " Sq Ft.</span>";
                                 ?>
                            </div>
                            <div class="bed d-flex align-items-center"><i class="fas fa-bed pr-1"></i>
                                <?php
                                echo "<span>";
                                $bedroom=$_GET['bedroom'];
                                echo $bedroom;
                                echo "</span>";
                                 ?>
                            </div>
                            <div class="bath d-flex align-items-center"><i class="fas fa-bath pr-1"></i>
                                <?php
                                $bathroom=$_GET['bathroom'];
                                echo "<span>";
                                echo $bathroom;
                                echo "</span>";
                                 ?>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row justify-content-center media-38289 mb-5">
                                <?php
                                $price=$_GET['price'];
                                echo "<span class=\"h1 text-danger d-block\">";
                                echo $price;
                                echo "</span>";
                                 ?>
                            </div>
                        </div>
                        <p><a href="#" class="btn btn-danger text-white px-4 py-3">Buy Now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="descripton col">
                    <?php
                        $des=$_GET['des'];
                          echo "<p>";
                          echo $des;
                          echo "</p>";
                          ?>
                    <a href="#" class="btn btn-danger text-white">Contact Agent</a>
                </div>



                <div class="update-section col">
                    <div class="update">
                        <div class="row align-items-center justify-content-center text-center">
                            <button type="button" class="btn btn-light col-md-12 p-3" data-toggle="modal" data-target="#exampleModalCenter">
                                UPDATE
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="Post">


                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">


                                                <div class="row align-items-center justify-content-center text-center">

                                                    <div class="col-md-3 form-group">
                                                        <label>Square Feet :</label>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <input name="updt_sqft" type="text" class="form-control" placeholder="Sq Ft." required>
                                                    </div>


                                                </div>
                                                <div class="row align-items-center justify-content-center text-center">
                                                    <div class="col-md-3 form-group">
                                                        <label>Price :</label>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <input name="updt_price" type="text" class="form-control" placeholder="Price" required>
                                                    </div>

                                                </div>
                                                <div class="row align-items-center justify-content-center text-center">
                                                    <div class="col-md-3 form-group">
                                                        <label>Bedrooms :</label>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <select name="updt_bedroom" id="" class="form-control w-100" required>
                                                            <option value="">Any Bedrooms</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3+</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center justify-content-center text-center">
                                                    <div class="col-md-3 form-group">
                                                        <label>Bathrooms :</label>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <select name="updt_bathroom" id="" class="form-control w-100" required>
                                                            <option value="">Any Bathrooms</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3+</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                <input name="updatepage" type="submit" class="btn btn-primary" value="Submit"> </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--
                        <div class="row align-items-center justify-content-center text-center">
                            <a href="pageupdate.php" class="btnbtn col-md-12 mb-2 p-3">UPDATE</a>
                        </div>
-->
                        <div class="row align-items-center justify-content-center text-center">
                            <button type="button" class="btn btn-light col-md-12 p-3 mt-3" data-toggle="modal" data-target="#exampleModalCenter1">
                                DELETE HOUSE
                            </button>
                             <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="Post">


                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Are You Sure? title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-success pl-4 pr-4" data-dismiss="modal">No</button>

                                                <input name="deletepage" type="submit" class="btn btn-outline-danger pl-4 pr-4" value="Yes"> </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--Other Contents can be added-->
            </div>
        </div>
    </div>
    <!-- Body Content END -->



    <!-- Footer START-->
    <footer class="footer-section mt-5">
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
