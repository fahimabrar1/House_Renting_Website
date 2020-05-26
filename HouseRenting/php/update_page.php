<?php
    
    echo "Ready To select from data ";
    session_start();
    echo $_SESSION['email'];
    if (empty($_SESSION['email']) ){
            header("Refresh:0; url=login.php");
    }else{

        if (empty($_GET['id'])) {
                    $id=$_SESSION['pageid'];
        }else{

             $id=$_GET['id'];
        }
        if ($_SESSION['pageid']!= $id) {
            $_SESSION['pageid']=$id;
        }
        echo $_SESSION['pageid'];


        $sql="SELECT rent_house_type.idrent_house_type,rent_house_type.SrcImg,rent_house_type.BedRooms,rent_house_type.BathRooms,rent_house_type.Square_Area,rent_house_type.Price,rent_house_type.Description,rent_house_type.House_Title,rent_house_type_address.Area,rent_house_type_address.City,rent_house_type_address.Street_Name,rent_house_type_address.Postal_Code,rent_house_type_address.Thana,rent_house_type_address.Road_No FROM rent_house_type_address INNER JOIN rent_house_type ON rent_house_type_address.idrent_house_type = rent_house_type.idrent_house_type WHERE rent_house_type.idrent_house_type=$id";

        
            if($result = $conn->query($sql))
            {
                echo "EXECUITED";
            }else{
                echo "Not Executed";
            }

    }
?>
