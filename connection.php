<?php
$dbname="messenger";
 $conn=new mysqli("localhost","root","",$dbname);

 if($conn->connect_error)
 {
     die("Failed connection ".$conn->connect_error);
 }
 
 ?>