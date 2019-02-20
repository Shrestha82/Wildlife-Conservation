<?php
    $msg ="";
    if(isset($_POST['submit'])){
        $conn = new mysqli('127.0.0.1','root','suraj','wildlife');
        $first = $conn->real_escape_string($_POST['first']);
        $last = $conn->real_escape_string($_POST['last']);
        $email = $conn->real_escape_string($_POST['email']);
        $username = $conn->real_escape_string($_POST['username']);
        $password = $conn->real_escape_string($_POST['password']);
        $cpassword = $conn->real_escape_string($_POST['cpassword']);
        $phone = $conn->real_escape_string($_POST['phone']);

        if($first ="" || $last ="" || $username ="" || $email ="" || $phone ="" || $password != $cpassword){
             $msg = "Please check your inputs!";
           // echo "Please check your inputs";
        }
        else{
            $sql = $conn->query("SELECT id FROM user WHERE email ='$email'");
            if($sql->num_rows > 0){
                $msg = "Email already exists in the database";
            }else{
                $str = "qwerstyozuhfjlsnbmvcklpQXCNDJKLSPSZBA1234567890!@#$%&";
                echo str_shuffle($str);//random string create..
            }
        }
    }
?>

