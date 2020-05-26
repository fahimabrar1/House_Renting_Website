<?php
    echo "Ready To select from data ";
    session_start();

    if (empty($_SESSION['email']) ){
            header("Refresh:0; url=log_in.php");
    }else{
        
        $productqurery = "SELECT rent_house_type.idrent_house_type,rent_house_type.SrcImg,rent_house_type.BedRooms,rent_house_type.BathRooms,rent_house_type.Square_Area,rent_house_type.Price,rent_house_type.Description,rent_house_type.House_Title,rent_house_type_address.Area,rent_house_type_address.City,rent_house_type_address.Street_Name,rent_house_type_address.Postal_Code,rent_house_type_address.Thana,rent_house_type_address.Road_No FROM rent_house_type_address INNER JOIN rent_house_type ON rent_house_type_address.idrent_house_type = rent_house_type.idrent_house_type;";
        
        $presult = $conn->query($productqurery);
        if ($presult->num_rows > 0) {
            $htres=1;
        }else{
            $htres=0;
        }
        
        function search($nhtres,$npresult)
        {

          if ($nhtres==1)
            {
              while($row = $npresult->fetch_assoc())
                {
                  getpage($row["SrcImg"],$row["Square_Area"],$row["BedRooms"],$row["BathRooms"],$row["Price"],$row["Road_No"].", ".$row["Street_Name"].", ".$row["City"].$row["Postal_Code"],$row["Description"],$row["House_Title"],$row["idrent_house_type"]);     
                }
            }

        }  

    }
?>
