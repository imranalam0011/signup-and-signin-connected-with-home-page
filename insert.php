<?php
session_start();
if(isset($_POST['submit'])) {
    require "config.php";
    $name =$_POST['name'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $gender =$_POST['gender'];
    $mobile =$_POST['mobile'];
    $address =$_POST['address'];

$query ="INSERT INTO `signup`(`name`,`email`,`password`,`gender`,`mobile`,`address`) VALUES ('$name','$email','$password','$gender','$mobile','$address')";  
$sql = mysqli_query($con,$query);
if($sql){
    
    header("Location: login.php?msg=success");    
}
else{
     header("Location: signup.php?msg=fail");    
} 
if(isset($_GET['msg'])){
    if($_GET['msg'] == "success"){
        echo "<script>alert('Record inserted successfully')</script>";
    }else{
        echo "<script>alert('Could not insert record:')</script>";
    }
}
mysqli_close($con);
}
?>
