<?php
if(isset($_POST['updatepage'])){
    $id=$_SESSION['pageid'];

   echo $id;

    $bedrooms=$_POST['updt_bedroom'];
    $bathrooms=$_POST['updt_bathroom'];
    $squarearea=$_POST['updt_sqft'];
    $price=$_POST['updt_price'];
    $sql="SELECT rent_house_type.idrent_house_type,rent_house_type.SrcImg,rent_house_type.BedRooms,rent_house_type.BathRooms,rent_house_type.Square_Area,rent_house_type.Price,rent_house_type.Description,rent_house_type.House_Title,rent_house_type_address.Area,rent_house_type_address.City,rent_house_type_address.Street_Name,rent_house_type_address.Postal_Code,rent_house_type_address.Thana,rent_house_type_address.Road_No FROM rent_house_type_address INNER JOIN rent_house_type ON rent_house_type_address.idrent_house_type = rent_house_type.idrent_house_type WHERE rent_house_type.idrent_house_type=$id";

    
    if($result = $conn->query($sql))
        {
            echo "EXECUITED";
        }else{
            echo "Not Executed";
        }   
    
    if ($row = $result->fetch_assoc())
         {

        echo "all ok";
       
        $sql1="UPDATE
                    rent_house_type
                SET
                    BedRooms = $bedrooms,
                    BathRooms = $bathrooms,
                    Square_Area = $squarearea,
                    Price = $price
                WHERE
                    rent_house_type.idrent_house_type = $id;";
          }
        if($conn->query($sql1))
            {
                echo "Submitted rent_house_type "; 
                Submit($id,$conn);

        }else{
            echo "broken web";
            Submit($id,$conn);
        }
    }
    
if(isset($_POST['deletepage']))
    {
    $id=$_SESSION['pageid'];

   echo $id;

         $sql="DELETE rent_house_type_address, rent_house_type FROM rent_house_type INNER JOIN rent_house_type_address on rent_house_type_address.idrent_house_type = rent_house_type.idrent_house_type where rent_house_type.idrent_house_type = $id;";

    
        if($result = $conn->query($sql))
        {
            echo "DELETEED";
            header("Refresh:0; url=find_a_home.php");
        }else{
            echo "Not DELETEED";
        }       
        
        

    }
    function Submit($temp,$conn)
    {
           $sql="SELECT rent_house_type.idrent_house_type,rent_house_type.SrcImg,rent_house_type.BedRooms,rent_house_type.BathRooms,rent_house_type.Square_Area,rent_house_type.Price,rent_house_type.Description,rent_house_type.House_Title,rent_house_type_address.Area,rent_house_type_address.City,rent_house_type_address.Street_Name,rent_house_type_address.Postal_Code,rent_house_type_address.Thana,rent_house_type_address.Road_No FROM rent_house_type_address INNER JOIN rent_house_type ON rent_house_type_address.idrent_house_type = rent_house_type.idrent_house_type WHERE rent_house_type.idrent_house_type=$temp";

    
        if($result = $conn->query($sql))
        {
            echo "EXECUITED";
        }else{
            echo "Not Executed";
        }       
        if ($row = $result->fetch_assoc()) 
        {
            $src=$row["SrcImg"];
            $sq=$row["Square_Area"];
            $bedrooms= $row["BedRooms"];
            $bathrooms= $row["BathRooms"];
            $price= $row["Price"];
            $location= $row["Road_No"].", ".$row["Street_Name"].", ".$row["City"].$row["Postal_Code"];
            $des= $row["Description"];
            $title = $row["House_Title"];
            $id= $row["idrent_house_type"];  
            header("Refresh:0; url=find_a_home-single_page.php?src=".$src."&&sq=".$sq."&&bedroom=".$bedrooms."&&bathroom=".$bathrooms."&&price=".$price."&&location=".$location."&&id=".$id."&&des=".$des."&&title=".$housetitle);
        
        
        }
    }
?>