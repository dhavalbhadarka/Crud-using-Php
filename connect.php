<?php 

$con = new mysqli("localhost","root","","trydb");

if(!$con){
    die(mysqli_error($con));
}

?>