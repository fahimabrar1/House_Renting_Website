<?php
    
    echo "Ready To select from data ";
    session_start();
    echo $_SESSION['email'];
    $id=$_GET['id'];
    $src=$_GET['src'];
        $sq=$_GET['sq'];
        $bedroom=$_GET['bedroom'];
        $bathroom=$_GET['bathroom'];
        $price=$_GET['price'];
        $location=$_GET['location'];
        $description=$_GET['des'];
        $title=$_GET['title'];
    $sql="SELECT rent_house_type.idrent_house_type,rent_house_type.SrcImg,rent_house_type.BedRooms,rent_house_type.BathRooms,rent_house_type.Square_Area,rent_house_type.Price,rent_house_type.Description,rent_house_type.House_Title,rent_house_type_address.Area,rent_house_type_address.City,rent_house_type_address.Street_Name,rent_house_type_address.Postal_Code,rent_house_type_address.Thana,rent_house_type_address.Road_No FROM rent_house_type_address INNER JOIN rent_house_type ON rent_house_type_address.idrent_house_type = rent_house_type.idrent_house_type WHERE rent_house_type.idrent_house_type=$id";

    
        if($result = $conn->query($sql))
        {
            echo "EXECUITED";
        }else{
            echo "BAL";
        }

    if(isset($_POST['updatepage'])){
        $_GET['id']=$id;
        $bedrooms=$_POST['updt_bedroom'];
        $bathrooms=$_POST['updt_bathroom'];
        $squarearea=$_POST['updt_sqft'];
        $price=$_POST['updt_price'];

        if ($row = $result->fetch_assoc())
         {
            # code...
        
        echo "all ok";
        $temp=$row["idrent_house_type"];    
            
	        $sql1="UPDATE
				    rent_house_type
				SET
				    BedRooms = 1,
				    BathRooms = 1,
				    Square_Area = 500,
				    Price = 1000
				WHERE
				    rent_house_type.idrent_house_type = $temp";
                }
        if($conn->query($sql1)){
            echo "Submitted rent_house_type "; 
            // header("Refresh:0; url=find_a_home-single_page.php?src=$src&&sq=$sq&&bedroom=$bedroom&&bathroom=$bathroom&&price=$price&&location=$location&&id=$id&&des=$description&&title=$housetitle");

        }else{
            echo "broken web";

            header("Refresh:0; url=find_a_home-single_page.php?src=".$src."&&sq=".$sq."&&bedroom=".$bedroom."&&bathroom=".$bathroom."&&price=".$price."&&location=".$location."&&id=".$id."&&des=".$description."&&title=".$housetitle);

            // echo "<a href=\"../pages/find_a_home-single_page.php?src=$src&&sq=$sq&&bedroom=$bedroom&&bathroom=$bathroom&&price=$price&&location=$location&&id=$id&&des=$description&&title=$housetitle\"></a>";
        }
        

    }

?>
