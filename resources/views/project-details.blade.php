
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Timothy's - Portfolio</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="LitmusThemes">
    <!-- description -->
    <meta name="description" content="Octagon - Portfolio Template">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="/css/fullpage.min.css">
    <!-- fullpage CSS -->
    <link rel="stylesheet" type="text/css" href="/css/owl.carousel.css">
    <!-- slider CSS -->
    <link rel="stylesheet" href="/css/animate.css">
    <!-- Animations CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- Responsive CSS -->
</head>
<body class="detail-page">
<div id="wrapper">
    <div class="preloader">
        <div class="preloader-bounce">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <h3></h3>
    </div>
    <!--HEADER START-->
    <header id="header">
        <div class="container-fluid">
            <div class="navbar">
                <a href="#" id="logo" title="Octagon">
                    {{--<img src="/images/logo.png" alt="Octagon">--}}
                </a>
                <div class="navigation-row">
                    <nav id="navigation">
                        <button type="button" class="navbar-toggle"> <i class="fa fa-bars"></i> </button>
                        <div class="nav-box navbar-collapse">
                            <ul class="navigation-menu nav navbar-nav navbars" id="nav">
                                <li class="active"><a href="/#slide01">Home</a></li>
                                <li><a href="/#slide02">About</a></li>
                                <li><a href="/#slide03">Skills</a></li>
                                <li><a href="/#slide04">Services</a></li>
                                <li><a href="/#slide05">Testimonials</a></li>
                                <li><a href="/#slide06">Work</a></li>
                                <li><a href="/#slide07">Contact</a></li>
                            </ul><!--/.navigation-menu-->
                        </div><!--/.nav-box-->
                    </nav><!--/#navigation-->
                </div><!--/.navigation-row-->
            </div><!--/.navbar-->
        </div><!--/.container-->
    </header><!--/#header-->
    <!--HEADER END-->

    <!--MAIN SECTION START-->
    <div class="content-section text-left">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>{{$data['name']}}</h1>
                </div><!--/col-->
                <p>{{$data['details']}}</p>
                <div class="col-12">
                    <div class="project-detail-col">
                        <div class="row">
                            <div class="col-md-4 d-flex">
                                <div class="info-inner"><strong>Skills</strong>
                                    <p>{{$data['Skills']}}</p></div>
                            </div>
                            <div class="col-md-4 d-flex">
                                <div class="info-inner">
                                    <strong>Date</strong>
                                    <p>22 February 2018</p>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex">
                                <div class="info-inner">
                                    <strong>Tags</strong>
                                    <p>
                                        {{$data['tag']}}
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex">
                                <div class="info-inner">
                                    <strong>Client</strong>
                                    <p>{{$data['Client_name']}}</p></div>
                            </div>
                            <div class="col-md-8 d-flex">
                                <div class="info-inner">
                                    <strong>Live URL</strong>
                                    <p><a href="#">{{$data['Url']}}</a></p>
                                </div><!--/.info-inner-->
                            </div>
                        </div><!--/.row-->

                        <p class="mt-5"><a href="#sliderDiv" class="btn btn-dark btn-view">View Project</a></p>
                        <div class="row project-images">
                           <div class="col-md-12">
                               <div style="width:100%; height:612px" data-simple-slider id="sliderDiv" class="animated-row">
                                   <img src="/images/{{$data['tag']}}/image1.jpg" alt="">
                                   <img src="/images/{{$data['tag']}}/image2.jpg" alt="">
                                   <img src="/images/{{$data['tag']}}/image3.jpg" alt="">
                                   <img src="/images/{{$data['tag']}}/image4.jpg" alt="">
                               </div>
                           </div>
                        </div><!--/.project-images-->
                    </div><!--/.project-detail-col-->
                </div><!--/col-->
            </div><!--/.row-->
        </div><!--/.container-->
    </div><!--/.content-section-->
    <!--MAIN SECTION END-->

    <!--FOOTER START-->
    <footer id="footer">
        <div class="container-fluid">
            <div class="footer-row">
                <ul class="social-icons">
                    <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                </ul><!--/.social-icons-->
                <div class="subscribe-section">
                    <a href="#" class="btn btn-xs btn-outline btn-subscribe">Subscribe</a>
                    <div class="subscribe-row">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <h5>Subscribe to our Newsletters</h5>
                                <p>Get Latest News, Information, Notifications & Announcements</p>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="input-field">
                                    <input class="form-control form-control-dark" placeholder="Name" type="text">
                                </div><!--/.input-field-->
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="input-field">
                                    <input type="email" class="form-control form-control-dark" placeholder="Email">
                                </div><!--/.input-field-->
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <button class="btn btn-dark">Subscribe</button>
                            </div>
                        </div>
                        <a href="#" class="close-btn close-subscribe"></a>
                    </div><!--/.subscribe-row-->
                </div><!--/.subscribe-section-->
                <div class="footer-right">
                    &copy; 2018 Octagon. All Rights Reserved
                </div><!--/.footer-right-->
            </div><!--/.footer-row-->
        </div><!--/.container-->
    </footer><!--#/footer-->
    <!--FOOTER END-->
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/simple-slider/1.0.0/simpleslider.min.js"></script>
<script>
    simpleslider.getSlider();
</script>

<!--/#wrapper-->
<script src="/js/jquery.js"></script>
<!-- Latest jQuery Library File -->
<script src="/js/bootstrap.min.js"></script>
<!-- Latest Bootstrap -->
<script src="/js/fullpage.min.js"></script>
<!-- Fullpage js -->
<script src="/js/scrolloverflow.js"></script>
<!-- Enable scrollbar when more content js -->
<script src="/js/owl.carousel.min.js"></script>
<!-- slider js -->
<script src="/js/jquery.inview.min.js"></script>
<script src="/js/general-scripts.js"></script>
<!-- Main Script -->
</body>
</html>