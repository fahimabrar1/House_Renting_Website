<?php

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error); 
        } 
    echo "Ready To Signup ";
    session_start();
    echo $_SESSION['email'];

    if(isset($_POST['submit_pfr'])){
        $housetype=$_POST['alltypes_pfr'];
        $bedrooms=$_POST['anybedrom_pfr'];
        $bathrooms=$_POST['anybathroom_pfr'];
        $housetitle=$_POST['title_pfr'];
        $squarearea=$_POST['sqft_pfr'];
        $description=$_POST['description_pfr'];
        $price=$_POST['price_pfr'];
        $user="SELECT iduser FROM `user` WHERE Email='fahim.abrar101@gmail.com'";
            if($temp=$conn->query($user)){
                if ($temp->num_rows == 1 ) {

                $temp_getid=$temp->fetch_assoc();
                $getid=$temp_getid["iduser"];
                echo $getid;
                }
        }else{
            echo "query error";
        }

        $sql="INSERT INTO `rent_house_type`(
                    `House_Type`,
                    `BedRooms`,
                    `BathRooms`,
                    `House_Title`,
                    `Square_Area`,
                    `Description`,
                    `Price`,
                    `iduser`
                )
                VALUES(
                    '$housetype',
                    $bedrooms,
                    $bathrooms,
                    '$housetitle',
                    $squarearea,
                    '$description',
                    $price,
                    $getid
                )";
        if($conn->query($sql)){
            echo "Submitted rent_house_type "; 
        }else{
            echo "query error";
        }
        $area=$_POST['area_pfr'];
        $city=$_POST['city_pfr'];
        $streetname=$_POST['streetname_pfr'];
        $postalcode=$_POST['postcode_pfr'];
        $Thana=$_POST['thana_pfr'];
        $roadno=$_POST['road_pfr'];
        $sqll="INSERT INTO `rent_house_type_address`(
                    `iduser`,
                    `Area`,
                    `City`,
                    `Street_Name`,
                    `Postal_Code`,
                    `Thana`,
                    `Road_No`
                )
                VALUES(
                  $getid,
                    '$area',
                    '$city',
                    '$streetname',
                    '$postalcode',
                    '$Thana',
                    '$roadno'
                )";
        if($conn->query($sqll)){
            echo "Submitted rent_house_type_address "; 
        }else{
            echo "query error";
        }
    }

?>
