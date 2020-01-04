<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="javascripts/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="javascripts/script.js"></script>
    <style>
        /* Made with love by Mutiullah Samim*/

        @import url('https://fonts.googleapis.com/css?family=Numans');

        html,
        body {
            background-image: url(signupbg.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            font-family: 'Numans', sans-serif;
        }

        .container {
            height: 100%;
            align-content: center;
        }

        .card {
            height: 460px;
            margin-top: auto;
            margin-bottom: auto;

            width: 420px;
            background-color: rgba(0, 0, 0, 0.6) !important;
        }

        .social_icon span {
            font-size: 60px;
            margin-left: 10px;
            color: #FFC312;
        }

        .social_icon span:hover {
            color: white;
            cursor: pointer;
        }

        .card-header h1 {
            color: white;
        }

        .social_icon {
            position: absolute;
            right: 20px;
            top: -45px;
        }

        .input-group {
            margin-bottom: 10px !important;

        }

        .input-group-prepend span {
            align-content: center;
            width: 50px;
            background-color: #FFC312;
            color: black;
            border: 0 !important;
        }

        input:focus {
            outline: 0 0 0 0 !important;
            box-shadow: 0 0 0 0 !important;

        }

        .remember {
            color: white;
        }

        .remember input {
            width: 20px;
            height: 20px;
            margin-left: 15px;
            margin-right: 5px;
        }

        .login_btn {
            color: black;
            background-color: #FFC312;
            width: 100px;

        }

        .login_btn:hover {
            color: black;
            background-color: white;
        }

        .links {
            color: white;
            margin-bottom: 20px;
            font-size: 15px;
        }

        .links a {
            margin-left: 4px;
        }
        .error_form{
            color: red;
        }
    </style>
</head>

<body>

    <?php

         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $dbname = 'bookworms';
         $conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname);
         $uname = $_SESSION['username'];
   
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         $sql = "SELECT name,email,phone,location,username,password FROM users WHERE username= '$uname' ";     
         $result = mysqli_query($conn, $sql);
         $getrow = mysqli_fetch_row($result);

$name = $email = $location  =$phone = $usernamee = $passwordd= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (empty($_POST["name"])) {
$name = $getrow[0];
} else {
$name = test_input($_POST["name"]);
}

if (empty($_POST["email"])) {
$email = $getrow[1];
} else {
$email = test_input($_POST["email"]);
}
if(empty($_POST["location"])) {
    $location=$getrow[3];
}
else {
    $location = test_input($_POST["location"]);
}
if (empty($_POST["usernamee"])) {
$usernamee = $getrow[4];
} else {
$usernamee = test_input($_POST["usernamee"]);
}
if (empty($_POST["passwordd"])) {
$passwordd = $getrow[5];
} else {
$passwordd = test_input($_POST["passwordd"]);
}
if(empty($_POST["phone"])) {
    $phone=$getrow[2];
}
else {
    $phone = test_input($_POST["phone"]);
}

}
    
   if(isset($_POST['submit']))
   {
   {

   $sql= "UPDATE users SET username='$usernamee',name='$name',password='$passwordd',email='$email',phone='$phone', 
   location='$location' where username='$uname' ";
  
   if ($conn->query($sql) === TRUE) {
       header('Location: Homepage.php');
       mysqli_close($conn);
   } else {
   echo "Error: " . $sql . "<br>" . $conn->error;
   } }
   
   }


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card" height="500px" width="400px" !important>
                <div class="card-header">
                    <h1 align="center"> Enter Your New Info</h1>

                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fas fa-user"></i> </span>
                            </div>
                            <input type="text" name="name" class="form-control"  value="<?php echo $name;?>" placeholder="Full Name">
                            
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                            </div>
                            <input type="text" name="email" class="form-control" id="form_email" value="<?php echo $email;?>" placeholder="Email Address">
                            <span class="error_form" id="email_error_message"></span>
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="glyphicon glyphicon-phone-alt"></i> </span>
                            </div>
                            <input type="text" name="phone" class="form-control" id="form_phone" value="<?php echo $phone;?>" placeholder="Phone">
                                <span class="error_form" id="phone_error_message"></span>
                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="glyphicon glyphicon-map-marker"></i> </span>
                            </div>

                            <input type="text" name="location" class="form-control" value="<?php echo $location;?>" placeholder="Enter Current Location">

                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>
                            <input type="text" name="usernamee" class="form-control" id="form_username" value="<?php echo $usernamee;?>" placeholder="Enter UserName">
                            <span class="error_form" id="username_error_message"></span>

                        </div>
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                            </div>
                            <input type="password" name="passwordd" class="form-control" id="form_password" value="<?php echo $passwordd;?>" placeholder="Enter Password">
                            <span class="error_form" id="password_error_message"></span>

                        </div>


            
                        <div class="form-group">
                            <button type="submit" value="Submit" name="submit" class="btn login_btn"> Update Account </button>
                        </div>

                    </form>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
</body>

</html>