<?php 

if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error); 
        } 
    echo "Ready To Log In ";

session_start();
if(isset($_SESSION['email'])){
      echo "<script>location.href='../pages/index.php'</script>";
    
}elseif(isset($_POST['login'])){
            echo "Loged in"; 

            $email=$_POST['email'];
            $password=$_POST['password'];
            
            $sql="SELECT
                    Email,
                    Password
                FROM
                    `user`
                WHERE
                    (
                    Email LIKE '$email'
                    ) AND (Password LIKE '$password')";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "Email :   " . $row["Email"] . "       Password : " . $row["Password"]; 
            $storeemail = $row["Email"];
            $storepassword = $row["Password"];

            if($_POST['email']==$storeemail && $_POST['password']==$storepassword){
                $_SESSION['email']=$_POST['email'];
                echo "<script>location.href='../pages/index.php'</script>";
            }
        }
    }
?>
