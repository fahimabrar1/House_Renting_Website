<?php
    echo "Ready To Signup ";
    session_start();
    if (empty($_SESSION['email']) ){
            header("Refresh:0; url=log_in.php");
    }else{
        if(isset($_POST['submit_pfr']))
        {
            $housetype=$_POST['alltypes_pfr'];
            $bedrooms=$_POST['anybedrom_pfr'];
            $bathrooms=$_POST['anybathroom_pfr'];
            $housetitle=$_POST['title_pfr'];
            $squarearea=$_POST['sqft_pfr'];
            $description=$_POST['description_pfr'];
            $price=$_POST['price_pfr'];

            $img="../resources/".$_FILES['image']['name'];
            $target="../resources/".basename($_FILES['image']['name']);

            if (move_uploaded_file($_FILES['image']['name'], $target))
            {
                echo "Moveds image";
            }
            $user="SELECT iduser FROM `user` WHERE Email='fahim.abrar101@gmail.com'";
            if($temp=$conn->query($user))
            {
                if ($temp->num_rows == 1 )
                {

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
                    `SrcImg`,
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
                    '$img',
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
        $thana=$_POST['thana_pfr'];
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
                    '$thana',
                    '$roadno'
                )";
        if($conn->query($sqll)){
            echo "Submitted rent_house_type_address "; 
        }else{
            echo "query error";
        }
    }
}
?>
