<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        img {
            vertical-align: middle;
        }

        footer.nb-footer {
            background: #222;
            border-top: 4px solid #b78c33;
        }

        footer.nb-footer .about {
            margin: 0 auto;
            margin-top: 40px;
            max-width: 1170px;
            text-align: center;
        }

        footer.nb-footer .about p {
            font-size: 13px;
            color: #999;
            margin-top: 30px;
        }

        footer.nb-footer .about .social-media {
            margin-top: 15px;
        }

        footer.nb-footer .about .social-media ul li a {
            display: inline-block;
            width: 45px;
            height: 45px;
            line-height: 45px;
            border-radius: 50%;
            font-size: 16px;
            color: #b78c33;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        footer.nb-footer .about .social-media ul li a:hover {
            background: #b78c33;
            color: #fff;
            border-color: #b78c33;
        }

        footer.nb-footer .footer-info-single {
            margin-top: 30px;
        }

        footer.nb-footer .footer-info-single .title {
            color: #aaa;
            text-transform: uppercase;
            font-size: 16px;
            border-left: 4px solid #b78c33;
            padding-left: 5px;
        }

        footer.nb-footer .footer-info-single ul li a {
            display: block;
            color: #aaa;
            padding: 2px 0;
        }

        footer.nb-footer .footer-info-single ul li a:hover {
            color: #b78c33;
        }

        footer.nb-footer .footer-info-single p {
            font-size: 13px;
            line-height: 20px;
            color: #aaa;
        }

        footer.nb-footer .copyright {
            margin-top: 15px;
            background: #111;
            padding: 7px 0;
            color: #999;
        }

        footer.nb-footer .copyright p {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <?php
    if(!(isset($_SESSION['username']))) {
    header('Location: login_bookworms.php'); 
    }
    ?>
    <div>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">BookWorms</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Booklist </a> </li>
                    <li><a href="add.php">ADD Books</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <form class="navbar-form navbar-left" action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search books/author/title" name="search">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Account <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="validation%20form.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                            <li><a href="login_bookworms.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Log out</a></li>
                        </ul>
                    </li>
                    
                    
                </ul>
            </div>
        </nav>
    </div>

    <div class="container" style="height=50%;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox" style=" width:100%; height: 500px !important;">

                <div class="item active">
                    <img src="getty_883231284_200013331818843182490_335833.jpg" class="img-rounded" ss alt="Los Angeles" style="width:100%; ">
                    <div class="carousel-caption">
                        <h1></h1>
                    </div>
                </div>

                <div class="item">
                    <img src="magic.jpg" class="img-rounded" alt="Chicago" style="width:100%;">
                    <div class="carousel-caption">


                    </div>
                </div>

                <div class="item">
                    <img src="bookbackground.jpg" class="img-rounded" alt="New York" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>New York</h3>
                        <p>We love the Big Apple!</p>
                    </div>
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div><br><br><br>
    <div class="container">
        <h3 style="text-align:center;">Latest Books in Booksworms</h3>
        
    </div> <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Header</div>
                    <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-footer">Footer</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Header</div>
                    <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-footer">Footer</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Header</div>
                    <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-footer">Footer</div>
                </div>
            </div>
        </div>
    </div><br>
    <div class="container">
        <h3 style="text-align:center;">Most Borrowed Books</h3>
    </div> <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Header</div>
                    <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-footer">Footer</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Header</div>
                    <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-footer">Footer</div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Header</div>
                    <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-footer">Footer</div>
                </div>
            </div>
        </div>
    </div><br><br>
    <footer class="nb-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="about">
                        <img src="images/logo.png" class="img-responsive center-block" alt="">
                        <p>Bookworms is a online based public library.You must be a registered member to borrow books or get others service. </p>

                        <div class="social-media">
                            <ul class="list-inline">
                                <li><a href="http://www.facebook.com/" title=""><i class='fab fa-facebook-f'></i></a></li>
                                <li><a href="http://www.twitter.com/" title=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href="http://www.googleplus.com/" title=""><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="http://www.linkedin.com/" title=""><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-info-single">
                        <h2 class="title">Help Center</h2>
                        <ul class="list-unstyled">
                            <li><a href="" title=""><i class="fa fa-angle-double-right"></i> How to Pay</a></li>
                            <li><a href="" title=""><i class="fa fa-angle-double-right"></i> FAQ's</a></li>
                            <li><a href="" title=""><i class="fa fa-angle-double-right"></i> Sitemap</a></li>
                            <li><a href="" title=""><i class="fa fa-angle-double-right"></i> Delivery Info</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-info-single">
                        <h2 class="title">Customer information</h2>
                        <ul class="list-unstyled">
                            <li><a href="" title=""><i class="fa fa-angle-double-right"></i> About Us</a></li>
                            <li><a href="" title=""><i class="fa fa-angle-double-right"></i> FAQ's</a></li>
                            <li><a href="" title=""><i class="fa fa-angle-double-right"></i> Sell Your Items</a></li>
                            <li><a href="" title=""><i class="fa fa-angle-double-right"></i> Contact Us</a></li>
                            <li><a href="" title=""><i class="fa fa-angle-double-right"></i> RSS</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-info-single">
                        <h2 class="title">Security & privacy</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Terms Of Use</a></li>
                            <li><a href="#" title=""><i class="fa fa-angle-double-right"></i> Privacy Policy</a></li>
                            <li><a href="" title=""><i class="fa fa-angle-double-right"></i> Return / Refund Policy</a></li>
                            <li><a href="" title=""><i class="fa fa-angle-double-right"></i> Store Locations</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-info-single">
                        <h2 class="title">Payment</h2>
                        <p>Sample HTML page with Twitter's Bootstrap. Code example of Easy Sticky Footer using HTML, Javascript, jQuery, and CSS. This bootstrap tutorial covers all the major elements of responsive</p>

                    </div>
                </div>
            </div>
        </div>

        <section class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p align="">Copyright © 2019. Your Company.</p>
                    </div>
                    <div class="col-sm-6"></div>
                </div>
            </div>
        </section>
    </footer>

</body>

</html>