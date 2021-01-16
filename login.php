<?php
include('config.php'); 
if(isset($_POST['submit'])){
    $email = $_POST['email'];  
    $password = $_POST['password'];
    $email = $_POST['email'];  
    $password = $_POST['password'];  
                          
    $emai = stripcslashes($email);  
    $password = stripcslashes($password);  

    $email = mysqli_real_escape_string($con, $email);  
    $password = mysqli_real_escape_string($con, $password);  
      
    $sql = "select * from signup where email = '$email' and password = '$password'";  

    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
                    
        if($count == 1){  
           header("Location: index.html?msg=success");

        }  
        else{  
            header("Location: login.php?msg=fail");
        }
    if(isset($_GET['msg'])){
    
    if($_GET['msg'] == "success"){
        
        echo "<script>alert('Login Success')</script>";
    }
    else{
        echo "<script>alert('Login Failed')</script>";
    }
  }
}
?>
<html>
<head>
    <title>LOGIN FORM</title>
<style>
    body{
    }
    .login-page {
        width: 360px;
        padding:10% 0 0;
        margin: auto;
    }
.form .h1{
    font-family: sans-serif;
    color: aliceblue;
}
.para{
    font-family: sans-serif;
    color: aliceblue;
}
    .form{
        position: relative;
        z-index: 1;
        background:#FFA800;
        max-width: 360px;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;
    }
    .form input{
        font-family: sans-serif;
        outline: 1;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
    }
    .form-group{
        margin-bottom:20px;
        margin:4px 0;
	    padding:0px;
        color: #000;
        font-weight: bold;
    }
    .form .submit{
       font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background:#FF5300;
        width: 100%;
        border: 0;
        padding: 15px;
        color: #ffffff;
        font-size: 14px;
        cursor: pointer;
       }
    .form submit:hover,.form submit:active{
        background: #43A047;
    }
.topnav {
  background-color: #333;
  overflow: hidden;
}
.img {
  opacity: 0.5;
}
.table .th.td{ 
    background: rgba(0,0,0,0.7);
    color: white;
    padding-top: 30px;
    padding-bottom: 12px;
    text-align: left;
    padding: 8px;
    border-collapse: collapse;
    width: 50%;
    border: 2px #2b2b2b solid;
    color: gray;

}
</style>
</head>

<body>
    <div class="login-page">
        <div class="form">
            <form class="login-form" action="" method="post">
                <h1 class="h1">LOGIN</h1>
                <input type="text" name="email" placeholder="Enter User Name">
                <input type="password" name="password" placeholder="Enter Password">
                <input class="submit" type="submit" name="submit" value="submit">
</form></div></div></body></html>