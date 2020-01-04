<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Add Books</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <?php

include "config.php";

if(isset($_POST['but_upload'])){
$usernamee=$_SESSION['username'];
$booksname =($_POST["bookname"]);
$authorsname =($_POST["authorname"]);
$name = $_FILES['file']['name'];
$target_dir = "C:/xampp/htdocs/Imagepractice/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);

// Select file type
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Valid file extensions
$extensions_arr = array("jpg","jpeg","png","gif");

// Check extension
if( in_array($imageFileType,$extensions_arr) ){
$query = "insert into books(Booksname,Author,Username,imagename) values('$booksname','$authorsname','$usernamee','".$name."')";
mysqli_query($con,$query);
move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
header('Location: Homepage.php');

}

}
?>

    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="" enctype='multipart/form-data'>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-book"></i></span>
                            </div>
                            <input type="text" name="bookname" class="form-control" placeholder="Books Name">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="authorname" class="form-control" placeholder="Author">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-file"></i></span>
                            </div>
                            <input type="file" name="file" class="form-control" placeholder="Image">

                        </div>
                        <div class="form-group">
                            <input type="submit" value="Publish" name="but_upload" class="btn  login_btn">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>



</body>

</html>