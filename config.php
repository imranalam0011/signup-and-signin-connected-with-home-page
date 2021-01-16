<?php
session_start();
$hostname = 'localhost';
$dbusername = 'root';
$dbpassword ='';
$dbname ='ecom';

$con=mysqli_connect($hostname,$dbusername,$dbpassword,$dbname);

//if($con){
//    echo "succsess" ;
//}
//else{
//    echo "faild";
//}
?>