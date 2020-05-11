<?php 

if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error); 
        } 
    echo "Ready To Signup "; 

    if(isset($_POST['submit'])){
        
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $street=$_POST['street'];
            $city=$_POST['city'];
            $cell=$_POST['cell'];
            $zip=$_POST['zip'];
            $area=$_POST['area'];
            $sql="INSERT INTO `user`(
                                `First_Name`,
                                `Last_Name`,
                                `Mobile_No`,
                                `Email`,
                                `Password`,
                                `Street_Name`,
                                `City`,
                                `Area`,
                                `Postal_Code`
                            )
                            VALUES('$fname',
                                    '$lname',
                                    $cell,
                                    '$email',
                                    '$password',
                                    '$street',
                                    '$city',
                                    '$area',
                                    $zip)";
        if($conn->query($sql)){
            echo "Submitted "; 
        }else{
            echo "query error";
        }
    }

?>
