<?php
    session_start();
    error_reporting(E_ALL ^ E_DEPRECATED);
    $conn=mysqli_connect('127.0.0.1','root','suraj','wildlife');
    $email = $_GET['email'];
    $data = "";
    $sql = "select * from user where email = $email";
    $res = mysqli_query($conn,$sql);

    $count = 0;
    while($temp = mysqli_fetch_assoc($res)){
        $count++;
    }
    if($count > 0){
        $data ="eamil already exist";
    }
    else{
        $data = "you can register";
    }
    echo $data;
?>