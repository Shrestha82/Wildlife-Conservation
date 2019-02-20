<script>
    alert("Registeration Successfully!");
</script>
<?php
    session_start();
    include_once "connection.php";
    error_reporting(E_ALL ^ E_DEPRECATED);
    $first = mysqli_real_escape_string($conn,$_POST['first']);
    $last =  mysqli_real_escape_string($conn,$_POST['last']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $uid = mysqli_real_escape_string($conn,$_POST['username']);
    $phone = mysqli_real_escape_string($conn,$_POST['phone']);
    $psd = mysqli_real_escape_string($conn,$_POST['password']);
    $cpsd = mysqli_real_escape_string($conn,$_POST['cpassword']);

    // $_SESSION["email"]=$email;//storing in session
    // $_SESSION["password"]=$psd;

    // $a = rand(100,999999);//generate random number
    // $_SESSION["random"]=$a;

    // $to=$email;
    // $subject= "Your Registration Varification Code";
    // $message =$a;
    // $header = "From:kanxo.stha1998@gmail.com \r\n";
    // $header = "Cc:kanxo.stha1998@gmail.com \r\n";
    // $header .= "MIME-Version:1.0\r\n";
    // $header .= "Content-type: text/html\r\n";
    // $retval = mail($to,$subject,$message,$header);
    // if($retval == true){
    //     echo "check your email for varification code".'<br>';
    //     $sql ="insert into user values('$first','$last','$email','$uid','$phone','$psd','$cpsd',$a);";
    //     mysqli_query($sql);
    //     header("Location: ../verification.php");    
    // }else{
    //     echo "Message could not be sent..";
    // }

     $sql = "INSERT INTO USER(first,last,email,username,phone,password,cpassword)
            VALUES('$first','$last','$email','$uid','$phone','$psd','$cpsd');";
    
     mysqli_query($conn,$sql);
        

    header("Location: ../login.php?registration_successfully");
?>