<!doctype html>
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Creative Corner</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="assets/images/logo.png">
        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Raleway+Light:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/slick/slick.css"> 
        <link rel="stylesheet" href="assets/css/slick/slick-theme.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/iconfont.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/bootsnav1.css">
        <link rel="stylesheet" type="text/css" href="assets/css/customizecss.css">
        <link rel="stylesheet" href="assets/css/responsive.css" />
        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <style type="text/css">
 .divider-new {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  font-weight: 300;
  margin-top: 45px;
  margin-bottom: 10px;
}

.divider-new h2 {
  margin-top: 5px;
}

.divider-new:before {
  content: '';
  height: 1.5px;
  background: #c6c6c6;
  flex: 1;
  margin: 0 .45em 0 0;
}

.divider-new:after {
  content: '';
  height: 1.5px;
  background: #c6c6c6;
  flex: 1;
  margin: 0 0 0 .45em;

}           
@media screen and (max-width: 1100px) and (min-width: 300px) {
    .navbar-brand .logo{
        display: none;
    }
}
@media screen and (min-width: 992px) {

        .navbar-default {
            padding: 5px 0;
            transition: padding 0.5s;
        }

            .navbar-default.navbar-shrink {
                padding: 0px 0;
            }
    }
.loader {
    display: block;
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: #fafafa url(assets/images/loader1.gif) no-repeat center center;
    text-align: center;
    color: #999;
    opacity: 1;
}
body{
    color: white;
}
.style_prevu_kit
{
    
    -webkit-transition: all 200ms ease-in;
    -webkit-transform: scale(1); 
    -ms-transition: all 200ms ease-in;
    -ms-transform: scale(1); 
    -moz-transition: all 200ms ease-in;
    -moz-transform: scale(1);
    transition: all 200ms ease-in;
    transform: scale(1);   

}
.style_prevu_kit:hover
{
    box-shadow: 0px 0px 5px #000000;
    z-index: 2;
    -webkit-transition: all 200ms ease-in;
    -webkit-transform: scale(1.1);
    -ms-transition: all 200ms ease-in;
    -ms-transform: scale(1.1);   
    -moz-transition: all 200ms ease-in;
    -moz-transform: scale(1.1);
    transition: all 200ms ease-in;
    transform: scale(1.1);
}
.bg-white{
    background-color: white;
}
.parallax {
    /* The image used */
   background-image: url("assets/images/sunset_wed.jpg");

    /* Set a specific height */
    height: 550px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}


.caption {
  position: absolute;
  top: 3%;
  padding: 18px;
  letter-spacing: 10px;
  width: 100%;
  left: 0;
  text-align: center;
  color: #000;
  font-size: 60px;
}
.caption h5{
  letter-spacing: normal;
}
.caption h3{
  font-size: 30px;
}
    /* carousel */
#quote-carousel {
  padding: 0 10px 30px 10px;
  margin-top: 30px;
  text-align:center;
}
/* indicator position */
#quote-carousel .carousel-indicators {
  right: 50%;
  top: auto;
  bottom: -10px;
  margin-right: -19px;
}
/* indicator color */
#quote-carousel .carousel-indicators li {
  background: #c0c0c0;
}
/* active indicator */
#quote-carousel .carousel-indicators .active {
  background: #333333;
  height:10px;
  width:10px;
  margin-bottom:1px;
}





        </style>
    </head>

    <body style="background-color: #FFF8DC;" data-spy="scroll" data-target=".navbar-collapse">
        <!-- Preloader -->
       
       <div class="loader"></div>
       <!--End off Preloader -->

        <div class="culmn">
            <!--Home page style-->
            <?php
            include 'header.php';
            ?>
            <!--Home Sections-->

            <section  id="home" class="home bg-black fix">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home text-center">
                            <div class="col-md-12">
                                <div class="hello_slid">
                                   <div class="slid_item">
                                        <div class="home_text ">
                                            <h2 class="text-white">Welcome to <strong>Creative Corner</strong></h2>
                                            <h1 class="text-white">An online wedding and birthday planner</h1>
                                            <h3 class="text-white">- Offers an convinient way of looking suppliers</h3>
                                        </div>

                                        <div class="home_btns m-top-40">
                                            <a href="" class="btn btn-default m-top-20">Book Now</a>
                                            <a href="" class="btn btn-default m-top-20">Find Suppliers</a>
                                        </div>
                                    </div><!-- End off slid item -->
                                    <div class="slid_item">
                                        <div class="home_text ">
                                            <h1 class="text-white">Creating Unforgettable Memories</h1>
                                            <h3 class="text-white">- We Create a <strong>Concept</strong> into The Market -</h3>
                                        </div>

                                        <div class="home_btns m-top-40">
                                            <a href="" class="btn btn-default m-top-20">Book Now</a>
                                            <a href="" class="btn btn-default m-top-20">View Venues</a>
                                        </div>
                                    </div><!-- End off slid item -->
                                    <div class="slid_item">
                                        <div class="home_text ">
                                            <h2 class="text-white">Welcome to <strong>Creative Corner</strong></h2>
                                            <h1 class="text-white">Communication is one of the key for the events to success.</h1>
                                            <h3 class="text-white">- Build <strong>strong</strong> customer relationship -</h3>
                                        </div>

                                        <div class="home_btns m-top-10">
                                            <a href="" class="btn btn-default m-top-20">Book Now</a>
                                            <a href="" class="btn btn-default m-top-20">View Suppliers</a>
                                        </div>
                                    </div><!-- End off slid item -->
                                </div>
                            </div>

                        </div>


                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->
            <br><br><br>
            <div class="container">
            <div class="row m-top-10 m-bottom-30">
            <div class="col-sm-4">
            <div class="style_prevu_kit well" style="background-color: white; box-shadow: 0 3px 7px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius: 5px;">
                <h5><strong>Look for supplier right away.</strong></h5>  
            <center>
                <img class="img-responsive" width="200" height="150" src="assets/images/supplier_handshake.png">
            </center>
                <h5><strong>Search, Choose, Pay</strong></h5>
                <b><h5>Build a supplier relationship</h5></b>
            </div>
            </div>
             <div class="col-sm-4">
            <div class="style_prevu_kit well" style="background-color: white;box-shadow: 0 3px 7px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius: 5px;">
                 <h5><strong>Convinient way of messaging</strong></h5>
                 <center>
                 <img width="200" height="150" src="assets/images/customer_messaging.png" class="img-responsives">
                 </center>
                 <h5><strong>Fill-out form, then chat!</strong></h5>
                 <h5>Strong customer relationship</h5>
            </div>
            
            </div>
             <div class="col-sm-4">
            <div class="style_prevu_kit well" width="200" height="150" style="background-color: white; box-shadow: 0 3px 7px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius: 5px;">
                <h5><strong>Secured Transactions</strong></h5>
                 <center>
                 <img width="200" height="150" src="assets/images/ssl_secured.png" class="img-responsives">
                 </center>
                 <h5><strong>Let's encrypt!</strong></h5>
                 <h5>Guaranteed 100% secured transactions.</h5>
            </div>
                 
            </div>
            </div>
           
            <!--Business Section-->
            </div>
            <section  id="business" style="background-color: white;" class="business roomy-40">
                <div class="container">
                    <div class="row">
                        <div class="main_business">
                            <center><h2 class="wow fadeInUp"><b>UNIQUE EVENT MANAGEMENT PLATFORM</b></h2><br>
                            <h5 style="text-align: justify;">Creative Corner is a website application that provides a convinient way of finding suppliers. It is also consist of a good layout which is user's friendly and will stands at the top of the game on other event management system.Creative Corner operates different weddings and birthdays all over metro manila which has different suppliers. Try the Creative Corner experience today.</h5>
                            </center>
                            <br><br>
                             <div class="row m-bottom-80">
                                <div class="col-lg-2 col-sm-6 wow fadeInRight">
                                    <img src="assets/images/tawktoo.png">
                                </div>
                                <div class="col-lg-4 col-sm-6 wow fadeInLeft">
                                <br>
                                    <h4><b>POWERED BY THIRD PARTY SOFTWARE</b></h4>
                                    <h5>Get a little time to talk to event organizers by having a live chat to get more information in different services to find the right setup of event for you</h5>
                                </div>
                                <div class="col-lg-2 col-sm-6 wow fadeInLeft">
                                    <img src="assets/images/ratingsnreview.png">
                                </div>
                                <div class="col-lg-4 col-sm-6 wow fadeInRight">
                                <br>
                                    <h4><b>RATINGS AND PICTURE REVIEWS</b></h4>
                                    <h5>Rely on ratings and actual photos to choose your supplier</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-2 col-sm-6 wow fadeInRight">
                                    <img src="assets/images/sms.png">
                                </div>
                                <div class="col-lg-4 col-sm-6 wow fadeInLeft">
                                <br>
                                    <h4><b>SMS GATEWAY</b></h4>
                                    <h5>Account verification by sending a verification code to prevent bogus transactions.</h5>
                                </div>
                                <div class="col-lg-2 col-sm-6 wow fadeInLeft">
                                    <img src="assets//images/holdedhands.png">
                                </div>
                                <div class="col-lg-4 col-sm-6 wow fadeInRight">
                                <br>
                                    <h4><b>HOORAY!</b></h4>
                                    <h5>Enjoy your most awaited moments of your life without worrying about the setup of your events.</h5>
                                </div>

                            </div>
                            
                        </div>
                    </div>
                </div>
            </section><!-- End off Business section -->
            <br><br>
           <section style="color: black;" id="features" class="features">
                <div class="container">
                <div class="row m-bottom-20">
                    <center>
                        <img width="95" height="100" src="assets/images/promise.png">
                        <br><br>
                        <h4><b>WE PROMISE TO DELIVER YOU</b>
                        </h4>
                    </center>
                </div>
                    <div class="row">
                            <div class="wow slideInLeft col-md-4">
                                <div class="features_item sm-m-top-30">
                                    <div  class="bg-white well">
                                    <center>
                                        <img class="m-top-30 m-bottom-30" src="assets/images/maximum_choices.png">
                                        <br><br><h5><b>MAXIMUM CHOICES</b></h5>
                                        <br>
                                        <h6 class="m-bottom-30 m-top-20">We give you the widest number of suppliers to choose freely whoever you want.</h6>
                                    </center>
                                    </div>
                                </div>
                             </div>
                            <div class="wow slideInUp col-md-4">
                                    <div class="bg-white well">
                                        <center>
                                        <img class="m-top-30 m-bottom-30" src="assets/images/lowest_fare.png">
                                        <br><br><h5><b>LOWEST PRICE</b></h5>
                                        <br>
                                        <h6 class="m-bottom-30 m-top-20">We always give you the lowest price with the best partner offers.</h6>
                                    </center>
                                    </div>
                                
                            </div>
                            <div class="wow slideInRight col-md-4">
                                    <div class="bg-white well">
                                        <center>
                                        <img class="m-top-30 m-bottom-30" height="100" width="100" src="assets/images/customer_care.png">
                                        <h5><b>SUPERIOR CUSTOMER SERVICE</b></h5><br>
                                        <h6 class="m-bottom-30 m-top-10">We put our experience and relationships to good use and are available to solve your event management issues.</h6>
                                    </center>
                                    </div>
                            </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off Featured Section-->
            <br><br>

                <div class="row">
                    <div class="parallax">
                      <div class="caption">
                        <div class="container">
                        <div class="col-sm-5">
                        <div style="background-color: #FFF8DC;box-shadow: 0 3px 7px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius: 5px;" class="well">
                        <center>
                            <img src="assets/images/logo.png">
                            <h3 class="m-top-30"><b>SERVICES</b></h3>
                            <br>
                            <h5 class="m-bottom-40">Feel free to discover different <br> services that we offer. Turn your <br> weddings / birthdays into <br> unforgetable one. </h5>
                            <button style="color: black;" class="m-bottom-30 form-control btn btn-default btn-lg">DISCOVER</button>
                        </center>
                        </div>
                        </div>
                        </div>
                      </div>
                    </div>
                </div>
            <br><br><br>
            <!--Brand Section-->
            <section id="brand" class="bg-white brand fix roomy-80">
                <div class="container">
                    <div class="row">
                            <div class="col-md-6">
                                <img src="assets/images/birthday.jpg" class="wow fadeInLeft img-responsive" style="box-shadow: 0 3px 7px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-radius: 5px;">
                            </div>
                             <div class="col-md-6">
                                <div class="business_item sm-m-top-50">
                                    <h2  class="wow fadeInRight text-uppercase"><strong>Creative Corner</strong> organized birthday parties. </h2>
                                    <ul>
                                        <li style="color: black" class="wow fadeInLeft"><i class="fa fa-arrow-circle-right"></i> Choose Modified or Full Package</li>
                                        <li style="color: black"  class="wow fadeInRight"><i class="fa  fa-arrow-circle-right"></i> Freely choose your preferred date</li>
                                        <li style="color: black" class="wow fadeInUp"><i class="fa  fa-arrow-circle-right"></i> Easy booking and Secured Payment</li>
                                    </ul>
                                    <p class="m-top-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit pellentesque eleifend in mi 
                                        sit amet mattis suspendisse ac ligula volutpat nisl rhoncus sagittis cras suscipit 
                                        lacus quis erat malesuada lobortis eiam dui magna volutpat commodo eget pretium vitae
                                        elit etiam luctus risus urna in malesuada ante convallis.</p>

                                    <div class="business_btn">
                                        <a href="" class="btn btn-default m-top-20">Read More</a>
                                        <a href="" class="btn btn-primary m-top-20">Book Now</a>
                                    </div>

                                </div>
                            </div>
                            </div>
                </div>
            </section><!-- End off Brand section -->

            <br><br>
            <!--Call to  action section-->
            <section id="action" class=" action bg-default roomy-40">
                    <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                        <center><h2>WHAT OUR CLIENT SAY</h2>
                        <h3>Convinient way of looking suppliers</h3>
                        </center>
                      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                      
                <!-- Bottom Carousel Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                  <li data-target="#quote-carousel" data-slide-to="1"></li>
                  <li data-target="#quote-carousel" data-slide-to="2"></li>
                </ol>
                        
                <!-- Carousel Slides / Quotes -->
                <div class="carousel-inner">

                <!-- Quote 1 -->
                <div class="item active">
                  <div class="row">
                    <div class="col-sm-12">
                      <h5>&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.&rdquo;</h5>
                      <small><strong>Vulputate M., Dolor</strong></small>
                    </div>
                  </div>
                </div>

                <!-- Quote 2 -->
                <div class="item">
                  <div class="row">
                    <div class="col-sm-12">
                      <h5>&ldquo;Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.&rdquo;</h5>
                      <small><strong>Fringilla A., Vulputate Sit</strong></small>
                    </div>
                  </div>
                </div>

                <!-- Quote 3 -->
                <div class="item">
                  <div class="row">
                    <div class="col-sm-12">
                      <h5>&ldquo;Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum. Cras mattis consectetur purus sit amet fermentum.&rdquo;</h5>
                      <small><strong>Aenean A., Justo Cras</strong></small>
                    </div>
                  </div>
                </div>
                  
                </div>
                        

                      </div>                          
                    </div>
                  </div>
                </div>
                 </section>
                  <section id="action" class="bg-white action bg-default roomy-40">
                    <div class="container">
                    <center><h2>Developed by the following technologies</h2> </center>
                    <div class="row m-bottom-10 m-top-20">
                        <div class="wow fadeInUp col-sm-3">

                            <img src="assets/images/tawktoooedited.png">
                        </div>
                        <div class="wow fadeInUp col-sm-3">
                        <center>
                            <img src="assets/images/googleedited.png">
                            </center>
                        </div>
                        <div class="wow fadeInUp col-sm-3">
                        <center>
                            <img src="assets/images/gmailedited.png">
                        </center>
                        </div>
                         <div class="wow fadeInUp col-sm-3">
                        <center>
                            <img src="assets/images/bootstrapedited.png">
                        </center>
                        </div>
                    </div>
                    
                    </div>
                </section>



           




        
<?php 
include 'footer.php';
?>
        <!-- JS includes -->

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/css/slick/slick.js"></script>
        <script src="assets/css/slick/slick.min.js"></script>
        <script src="assets/js/jquery.collapse.js"></script>
        <script src="assets/js/bootsnav.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
            $('.loader').fadeOut(1000);
        });
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
            $(window).scroll(function () {
            $(".navbar-default").toggleClass("navbar-shrink", $(this).scrollTop() > 50)
        });
         });
        </script>
        <script type="text/javascript">
          function register() {
                window.location.href ="Register.php";
            }
        </script>
        

    </body>
</html>
