<?php
include'connect.php';
if(isset($_POST['insertButton'])){
    extract($_POST);
    $str = "INSERT INTO yt SET email='$user_email', password='$user_password'";
    $query= mysqli_query($con, $str);
    if($query){
        echo "insert";
    }else{
        echo "not insert";
    }
}
?>