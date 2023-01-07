<?php
session_start();
if(isset($user_data['user_name'])){
    unset($user_data['user_name']);
}

header("Location: login.php");
die;