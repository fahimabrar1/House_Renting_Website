<?php
session_start();

if(isset($_SESSION['email'])){
    session_destroy();
    echo "<script>location.href='../pages/log_in.php'</script>";
}else{
    echo "<script>location.href='../pages/log_in.php'</script>";
}

?>