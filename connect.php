<?php
$con = mysqli_connect("localhost","root","","ytclass");
if($con){
    echo "ok";
}else{
    echo"not connected";
}
?>