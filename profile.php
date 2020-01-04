<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile Card</title>
    <style type="">
        
        body{
    margin: 0px;
    padding: 0px;
    background: #f1f1f1;
    font-family: arial;
    box-sizing: border-box;
}
.card-container{
    width: 300px;
    height: 430px;
    background: #FFF;
    border-radius: 6px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    box-shadow: 0px 1px 10px 1px #000;
    overflow: hidden;
    display: inline-block;
}
.upper-container{
    height: 150px;
    background: #7F00FF;
}
.image-container{
    background: white;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    padding: 5px;
    transform: translate(100px,100px);
}
.image-container img{
    width: 80px;
    height: 80px;
    border-radius: 50%;
}
.lower-container{
    height: 280px;
    background: #FFF;
    padding: 20px;
    padding-top: 40px;
    text-align: center;
}
.lower-container h3, h4{
    box-sizing: border-box;
    line-height: .6;
    font-weight: lighter;
}
.lower-container h4{
    color: #7F00FF;
    opacity: .6;
    font-weight: bold;
}
.lower-container p{
    font-size: 16px;
    color: gray;
    
}
.lower-container .btn{
    padding: 12px 20px;
    background: #7F00FF;
    border: none;
    color: white;
    border-radius: 30px;
    font-size: 12px;
    text-decoration: none;
    font-weight: bold;
    transition: all .3s ease-in;
}
.lower-container .btn:hover{
    background: transparent;
    color: #7F00FF;
    border: 2px solid #7F00FF;
}
    </style>
</head>

<body>

    <?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $dbname = 'bookworms';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
         $uname = $_SESSION['username'];
   
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
         $sql = "SELECT name,email,phone,location FROM users WHERE username= '$uname' ";
         $result = mysqli_query($conn, $sql);
         $getrow = mysqli_fetch_row($result);
         mysqli_close($conn);
      ?>

<div class="card-container">

        <div class="upper-container">
            <div class="image-container">
                <img src="" />
            </div>
        </div>

        <div class="lower-container">
            <div>
                <h3><?php echo $getrow[0] ?></h3>
                <h3><?php echo $getrow[2] ?></h3>
                <h3><?php echo $getrow[1] ?></h3>
                <h3><?php echo $getrow[3] ?></h3>
                
            </div>
            <div>
                <a href="update.php" class="btn">Update profile</a>
            </div>
        </div>

    </div>
</body>
</html>