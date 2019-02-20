<script>
    alert("Login successfully!");
</script>
<?php
    extract($_POST);
    $conn = mysqli_connect('127.0.0.1','root','suraj','wildlife');
    $result = mysqli_query($conn,"SELECT * FROM USER");

    $flag = 0;
    for($i = 0; $i < mysqli_num_rows($result); $i++ ){
        $row = mysqli_fetch_assoc($result);
        if($row['username'] == $username  && $row['password'] == $password){
            $flag = 1;
            break;
        }
        // elseif($row['Email']==$email && $row['password'] == $password){
        //     $flag = 1;
        //     break;
        // }
    }

    if($flag){
        session_start();
        
        
        if(isset($_SESSION["submit"])){
            $_SESSION["submit"] = $username ;
        }
        // elseif(isset($_SESSION["submit"])){
        //     $_SESSION["submit"] = $email ;
        // }

        //header("Location: ../success.php");

    }
    else{
        header("Location: ../unsuccess.php");
    }
    $first =$row['first'];    
    $last =$row['last'];
    $email =$row['email'];
    $phone =$row['phone'];
    $username =$row['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile-Wildlife Conservation Of India</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CustomStyle.css">
    
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
             <a class="navbar-brand text-center text-warning " href="home.html">Wildlife<br>
                Conservation<br>
                Of India    
            </a> 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                  <a class="nav-link text-white active " href="../home.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="../about.html">About</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link text-white" href="../contact.html">Contact Us</a>
                </li>
                
              </ul>
              <!-- <form class="form-inline my-2 my-lg-0"> 
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
              -->
              <ul class="navbar-nav my-2 my-lg-0">
                <li class="nav-item">
                   <a class="nav-link text-white" href="#"> <?php echo $first ?>    </a>

                    <!-- <a class="nav-link text-white" href="../login.php">Login</a> -->
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="logout.php">Logout</a>       
                </li> 
              </ul>
            </div>
          </nav>
        <div class="mx-auto "  >
            <br>
          <h1 class="ml-5">Welcome <?php echo $last; ?>!</h1>
          <h2 class="ml-5" >Your Detials: </h2>
            <p class="ml-5"><?php echo "Name:   ", $first;?></p>
            <p class="ml-5"><?php echo "Surname: ", $last;?></p>
            <p class="ml-5"><?php echo "Username: ", $username;?></p>
            <p class="ml-5"><?php echo "Email: ", $email;?></p>
            <p class="ml-5"><?php echo "Mobile No: ", $phone;?></p>
</div>
</body>
</html>