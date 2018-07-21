<?php include('config/setup.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page_title.' | '.$site_title?></title>
    <link rel="icon" href="icon.png" />
    <!-- Google API -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/index_style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/form-elements.css">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
        <!-- jQuery Script-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!--Custom JS -->
    <script src="js/uarea.js"></script>

    
</head>

<body>
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="material-icons">apps</i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a onclick=$("#menu-close").click();>Menu</a>
            </li>
            <li>
                <a href="#top" onclick=$("#menu-close").click();>Home</a>
            </li>
            <li>
                <a href="#login" onclick=$("#menu-close").click();>Login</a>
            </li>
            <li>
                <a href="#about" onclick=$("#menu-close").click();>About</a>
            </li>
            <li>
                <a href="#services" onclick=$("#menu-close").click();>Services</a>
            </li>
            <li>
                <a href="#portfolio" onclick=$("#menu-close").click();>Our Work</a>
            </li>
            <li>
                <a href="#contact" onclick=$("#menu-close").click();>Contact Us</a>
            </li>
        </ul>
    </nav>
    
    <!-- Main Text -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Gujarat Forest Website</h1>
            <h3>Your Internet Gateway to Forestry &amp; Forest Products in Gujarat</h3>   
            <br>
            <a href="#about" class="btn btn-dark btn-lg">Explore More!</a>
        </div>
    </header>

    <!-- Login Section -->
    <section  id="login" class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Authorized Users Please Login Here!</h3>
                    <hr class="small">
                    <a href="login.php" class="btn btn-lg btn-light">Login</a>
                </div>
                <center><img src = "login.jpg" height="450px" width="950px"></center>
            </div>
        </div>
    </section>
    
    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Welcome</h2>
                     <hr class="small">
                    <p class="lead">Welcome to Gujarat Forests Website, the foremost website on forests and forestry in Gujarat. It provides quick access to the Internet sites of the federal and provincial governments, First Nations, the forest industries, equipment suppliers, associations and NGOs, consultants, education and research, information about forestry, employment opportunities, and much more. We invite you to browse our pages.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
   <section id="services" class="services bg-primary"> 
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Services</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-male fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Employment Opportunities</strong>
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-leaf fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Access to Forest Resources</strong>
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-flask fa-stack-1x text-primary" aria-hidden="true"></i>
                            </span>
                                <h4>
                                    <strong>Education & research</strong>
                                </h4>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-shield fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Protect Environment </strong>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
</section>
    
<!-- our work or timeline -->    
<section id="portfolio" class="portfolio">
    <center><h2>Our Work</h2></center>
    <hr class="small">
    <br>
    <div id="myCarousel" class="carousel slide">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Indicators for images -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                                <li data-target="#myCarousel" data-slide-to="4"></li>
                                <li data-target="#myCarousel" data-slide-to="5"></li>
                                <li data-target="#myCarousel" data-slide-to="6"></li>
                                <li data-target="#myCarousel" data-slide-to="7"></li>
                                <li data-target="#myCarousel" data-slide-to="8"></li>
                                <li data-target="#myCarousel" data-slide-to="9"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="fill" style="background-image:url('../education.jpg'); height:600px; width:100%"></div>
                                    <div class="carousel-caption">
                                        <h2>Encourageing education programmes!</h2>
                                    </div>
                                </div>
                                <div class="item">
                                    <!-- Set the second background image using inline CSS below. -->
                                    <div class="fill" style="background-image:url('../auto.jpg'); height:600px; width:100%"></div>
                                    <div class="carousel-caption">
                                        <h2>Forest Automation!</h2>
                                    </div>
                                </div>
                                <div class="item">
                                   <div class="fill" style="background-image:url('../equipments.jpg'); height:600px; width:100%"></div>
                                    <div class="carousel-caption">
                                        <h2>Using Best Equipments!</h2>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fill" style="background-image:url('../farming.jpg'); height:600px; width:100%"></div>
                                    <div class="carousel-caption">
                                        <h2>Taking care of Farmers!</h2>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fill" style="background-image:url('../foodsupplies.jpg'); height:600px; width:100%"></div>
                                    <div class="carousel-caption">
                                        <h2>Supplying Raw-material for Food Products!</h2>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fill" style="background-image:url('../partner.jpg'); height:600px; width:100%"></div>
                                    <div class="carousel-caption">
                                        <h2>Partnership with leading companies!</h2>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fill" style="background-image:url('../petrocomp.jpg'); height:600px; width:100%"></div>
                                    <div class="carousel-caption">
                                        <h2>Encouragieng Petroleum Industry!</h2>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fill" style="background-image:url('../research.jpg'); height:600px; width:100%"></div>
                                    <div class="carousel-caption">
                                        <h2>Forest Research!</h2>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fill" style="background-image:url('../team.jpg'); height:600px; width:100%"></div>
                                    <div class="carousel-caption">
                                        <h2>Best Forest Management team!</h2>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="fill" style="background-image:url('../transport.jpg'); height:600px; width:100%"></div>
                                    <div class="carousel-caption">
                                        <h2>Transport services!</h2>
                                    </div>
                                </div>
                            </div>

                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="icon-prev"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="icon-next"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </section>

    <!--Location Map -->
    <section id="contact" class="map">
        <center><h2>Contact Us</h2></center>
        <hr class="small">
        <iframe width="100%" height="500" src="http://www.citymaps.ie/create-google-map/map.php?width=100%&amp;height=400&amp;hl=en&amp;q=Gandhinagar%20+(Forests%20%26%20Environment%20Department)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=A&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        <br />
    </section>
      
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Goverment Of Gujarat</strong>
                    </h4>
                    <p>Block 14, 8 th floor, Sachivalaya,
                        <br>Gandhinagar - 382 010,Gujarat.</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (123) 456-7890</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:secfed@gujarat.gov.in">secfed@gujarat.gov.in</a>
                        </li>
                    </ul>
                     
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/gujaratinformation.official/"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/InfoGujarat"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="https://forests.gujarat.gov.in/"><i class="fa fa-info-circle fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Govt. of Gujarat 2017</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
<?php include('config/js.php')?>