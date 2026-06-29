<?php
$conn = mysqli_connect("localhost", "root", "", "internedge");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>