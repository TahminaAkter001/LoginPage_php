<?php
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>


<style type="text/css">
    #text{
        height:25px;
        border-radius:5px;
        padding:4px;
        border:solid thin #aaa;
        width:100%;
    }
    #button{
        padding:10px;
        width:100px;
        color:white;
        background-color:lightblue;
        border:none;
        font-weight:bold;
    }
    #box{
        background-color:grey;
        margin:none;
        width:300px;
        padding:20px;
        margin:auto;
    }
</style>

<div id="box">
    <form method="post">
<div style="font-size: 26px; font-weight: bold; margin: 10px; color: white;">
    Login
</div>

        <input id="text" type="text" name="username" placeholder="Enter Username"><br><br>
        <input id="text" type="password" name="password" placeholder="Enter Password"><br><br>
        <input id="button" type="submit" value="Login"><br><br>

        <a href="signup.php">Click to Signup</a><br><br>
        </form>
   
</div>
    
</body>
</html>