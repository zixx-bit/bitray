<!doctype html>

<html>

<head>
<title>BitRay</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->



        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" media="all">
      <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" media="all"> -->






        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">


        <!-- Bootstrap bootstrap-touch-slider Slider Main Style Sheet -->
        <link href="bootstrap-touch-slider.css" rel="stylesheet" media="all">

</head>

<!-- <body> -->
  <body>



    <?php
    include "includes/navigation.php";
    ?>

      <!--
      If you want to change #bootstrap-touch-slider id then you have to change Carousel-indicators and Carousel-Control  #bootstrap-touch-slider slide as well
      Slide effect: slide, fade
      Text Align: slide_style_center, slide_style_left, slide_style_right
      Add animation in text: https://daneden.github.io/animate.css/


      -->

      <div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >

          <!-- Indicators -->
          <ol class="carousel-indicators">
              <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
              <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
              <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper For Slides -->
          <div class="carousel-inner" role="listbox">

              <!-- Third Slide -->
              <div class="item active">

                  <!-- Slide Background -->
                  <img src="images/slide1.jpeg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                  <div class="bs-slider-overlay"></div>

                  <div class="container">
                      <div class="row">
                          <!-- Slide Text Layer -->
                          <div class="slide-text slide_style_left">
                              <h1 data-animation="animated zoomInRight">BitRay</h1>
                              <p data-animation="animated fadeInLeft">You best solution in development.</p>
                              <a href=" " target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">About us</a>
                              <a href=" " target="_blank"  class="btn btn-primary" data-animation="animated fadeInRight">Team</a>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- End of Slide -->

              <!-- Second Slide -->
              <div class="item">

                  <!-- Slide Background -->
                  <img src="images/slide2.jpeg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                  <div class="bs-slider-overlay"></div>
                  <!-- Slide Text Layer -->
                  <div class="slide-text slide_style_center">
                      <h1 data-animation="animated flipInX">Tranforming business</h1>
                      <p data-animation="animated lightSpeedIn">easy e-commerce.</p>
                      <a href="" target="_blank" class="btn btn-default" data-animation="animated fadeInUp">Services</a>
                      <a href="" target="_blank"  class="btn btn-primary" data-animation="animated fadeInDown">Clients</a>
                  </div>
              </div>
              <!-- End of Slide -->

              <!-- Third Slide -->
              <div class="item">

                  <!-- Slide Background -->
                  <img src="images/slide3.jpeg" alt="Bootstrap Touch Slider"  class="slide-image"/>
                  <div class="bs-slider-overlay"></div>
                  <!-- Slide Text Layer -->
                  <div class="slide-text slide_style_right">
                      <h1 data-animation="animated zoomInLeft">Quality Redifined</h1>
                      <p data-animation="animated fadeInRight">Satisfied clients</p>
                      <a href="" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">price plan</a>
                      <a href="" target="_blank" class="btn btn-primary" data-animation="animated fadeInRight">contact us</a>
                  </div>
              </div>
              <!-- End of Slide -->


          </div><!-- End of Wrapper For Slides -->

          <!-- Left Control -->
          <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
              <span class="fa fa-angle-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>

          <!-- Right Control -->
          <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
              <span class="fa fa-angle-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>

      </div> <!-- End  bootstrap-touch-slider Slider -->







<!------About----->
<section id="about">
<div class="container">
<div class="row">
<div class="col-md-6">
<h2>About us</h2>
<div class="about-content" data-animation="animated fadeInLeft">
BitRay is an innovative tech solutions company that develops high perfomance software to suit you business needs.
</div>
<button type="button" class="btn btn-primary">Read more>>
</button>
</div>
<div class="col-md-6 skills-bar">
<p>E-Commerce</p>
<div class="progress">
<div class="progress-bar" style="width: 80%;">80%</div>
</div>
<p>E-commerce</p>
<div class="progress">
<div class="progress-bar" style="width: 85%;">85%</div>
</div>
<p>E-Commerce</p>
<div class="progress">
<div class="progress-bar" style="width: 75%;">75%</div>
</div>
<p>E-Commerce</p>
<div class="progress">
<div class="progress-bar" style="width: 50%;">50%</div>
</div>
</div>
</section>

<!-----------Services-------->
<section id="services">
<div class="container">
<h1>Our Services</h1>
<div class="row services">
<div class="col-md-3 text center">
<div class="icon">
<i class="fa fa-desktop"></i>
</div>
<h3>Top-Notch Solution Design</h3>
<p>With our extensive knowledge of technology, engineering and software dextentybolstered by a deep & nunaced compression of the local business
  environment. We create customized software solutions to combat and faciitate optimum productivity
.</p>
</div>
<div class="col-md-3 text center">
<div class="icon">
<i class="fa fa-eye"></i>
</div>
<h3>Software Development & Installation</h3>
<p>Our main focus is to identify and consolidate all business, development aspects and then concentrate on building high perfomance fortified
  and extremely efficient software for their business operation needs.
.</p>
</div>
<div class="col-md-3 text center">
<div class="icon">
<i class="fa fa-paint-brush"></i>
</div>
<h3>System Security</h3>
<p>We ensure that businesses, data and operations are protected by implementing, maintaining and continually improving a cyber security system
  to address different types of cyber threats
.</p>
</div>
<div class="col-md-3 text center">
<div class="icon">
<i class="fa fa-microphone"></i>
</div>
<h3>System management and Update</h3>
<p>With continued partnership with our clients, we track, analyse, maintain and update their software system as the internet and digitally dependent
  operations develope and change
.</p>
</div>
</div>
</div>
</section>
<!---------Team Members-------->
<section id="team">
<div class="container">
<h1>Our Team</h1>
<div class="row">
<div class="col-md-3 profile-pic text-center">
<div class="img-box">
<img style="margin-left: auto;
  margin-right: auto;
  " src="img/dope2.jpg" class="img-responsive">
<ul>
<a href="#"><li><i class="fa fa-facebook-official"></i></li></a>
<a href="#"><li><i class="fa fa-twitter-square"></i></li></a>
<a href="#"><li><i class="fa fa-linkedin-square"></i></li></a>
</ul>
</div>
<h2>Edd Michira</h2>
<h3>Director</h3>
<P>Experienced in development and branding. Greate creative software and talent</P>
</div>
<div class="col-md-3 profile-pic text-center">
<div class="img-box" >
<img style="margin-left: auto;
  margin-right: auto;
  " src="img/dope3.jpg" class="img-responsive">
<ul>
<a href="#"><li><i class="fa fa-facebook-official"></i></li></a>
<a href="#"><li><i class="fa fa-twitter-square"></i></li></a>
<a href="#"><li><i class="fa fa-linkedin-square"></i></li></a>
</ul>
</div>
<h2>Denis Mutisya</h2>
<h3>Operations manager</h3>
<P>Experienced in development and branding. Greate creative software and talent</P>
</div>
<div class="col-md-3 profile-pic text-center">
<div class="img-box">
<img style="margin-left: auto;
  margin-right: auto;
  " src="img/dope2.jpg" class="img-responsive">
<ul>
<a href="#"><li><i class="fa fa-facebook-official"></i></li></a>
<a href="#"><li><i class="fa fa-twitter-square"></i></li></a>
<a href="#"><li><i class="fa fa-linkedin-square"></i></li></a>
</ul>
</div>
<h2>Rose Lynn</h2>
<h3>Maketing Head </h3>
<P>Experienced in marketing and brandmanagement. Greate creative talent</P>
</div>
<div class="col-md-3 profile-pic text-center">
<div class="img-box">
<img style="margin-left: auto;
  margin-right: auto;
  " src="img/dope3.jpg" class="img-responsive">
<ul>
<a href="#"><li><i class="fa fa-facebook-official"></i></li></a>
<a href="#"><li><i class="fa fa-twitter-square"></i></li></a>
<a href="#"><li><i class="fa fa-linkedin-square"></i></li></a>
</ul>
</div>
<h2>Lucy bosse</h2>
<h3>Marketing head</h3>
<P>Experienced in marketing and brandmanagement. Greate creative talent</P>
</div>
</div>
</div>
</section>
<!---------promo------->
<section id="promo">
<div class="container">
<p>Get discounted rates on all our products and services. Contact us for a free demo</p>
<a href="#contact" class="btn btn-primary">Contact Us</a>
</div>
</section>
<!---------Price Plans------>
<section id="price">
<div class="container">
<h1>Price PLan</h1>
<div class="row">

<div class="col-md-4">
<div class="single-price">
<div class="price-head">
<h2>Basic package</h2>
<p>Ksh 2500/<span>month</span></p>
</div>
<div class="price-content">
  <ul>
  <li><i class="fa fa-check-circle"></i>Online Store(E-commerce website with admin panel)</li>
  <li><i class="fa fa-check-circle"></i>1 staff account </li>
  <li><i class="fa fa-check-circle"></i>unlimited transactions</li>
  <li><i class="fa fa-check-circle"></i>Low inventory update </li>
  <li><i class="fa fa-check-circle"></i>99.99% uptime </li>
  <li><i class="fa fa-check-circle"></i>Abandoned cart recovery</li>

  <li><i class="fa fa-check-circle"></i>Unlimited products </li>
  <li><i class="fa fa-times-circle"></i>Mpesa payment intergration </li>
  <li><i class="fa fa-times-circle"></i>Customer list </li>
  <li><i class="fa fa-times-circle"></i>Sales by month report</li>
  <li><i class="fa fa-times-circle"></i>Free domain name</li>
  <li><i class="fa fa-times-circle"></i>Dedicated server hosting</li>


  </ul>
</div>
<div class="price-button">
<a class="btn  btn-info" href="#">Get</a>
</div>
</div>
</div>
<div class="col-md-4">
<div class="single-price">
  <div class="price-head">
  <h2>Standard Package</h2>
  <p>Ksh 4000/<span>month</span></p>
  </div>
<div class="price-content">
  <ul>
    <li><i class="fa fa-check-circle"></i>Online Store(E-commerce website with admin panel)</li>
  <li><i class="fa fa-check-circle"></i>Abandoned cart recovery</li>
  <li><i class="fa fa-check-circle"></i>Sales by month report</li>
  <li><i class="fa fa-check-circle"></i>4 staff account </li>
  <li><i class="fa fa-check-circle"></i>Low inventory update </li>
  <li><i class="fa fa-check-circle"></i>99.99% uptime </li>
  <li><i class="fa fa-check-circle"></i>Unlimited products </li>
  <li><i class="fa fa-check-circle"></i>Mpesa payment intergration </li>
  <li><i class="fa fa-check-circle"></i>Customer list </li>
  <li><i class="fa fa-check-circle"></i>unlimited transactions</li>
  <li><i class="fa fa-times-circle"></i>Free domain name</li>
  <li><i class="fa fa-times-circle"></i>Dedicated server hosting</li>

  </ul>
</div>
<div class="price-button">
<a class="buy-btn" href="#">Get</a>
</div>
</div>
</div>
<div class="col-md-4">
<div class="single-price">
<div class="price-head">
<h2>Advanced Package</h2>
<p>Ksh 6500/<span>month</span></p>
</div>
<div class="price-content">
  <ul>
    <li><i class="fa fa-check-circle"></i>Online Store(E-commerce website with admin panel)</li>
  <li><i class="fa fa-check-circle"></i>Abandoned cart recovery</li>
  <li><i class="fa fa-check-circle"></i>Sales by month report</li>
  <li><i class="fa fa-check-circle"></i>more than 6 staff account </li>
  <li><i class="fa fa-check-circle"></i>Low inventory update </li>
  <li><i class="fa fa-check-circle"></i>99.99% uptime </li>
  <li><i class="fa fa-check-circle"></i>Unlimited products </li>
  <li><i class="fa fa-check-circle"></i>Mpesa payment intergration </li>
  <li><i class="fa fa-check-circle"></i>Customer list </li>
  <li><i class="fa fa-check-circle"></i>unlimited transactions</li>
  <li><i class="fa fa-check-circle"></i>Free domain name</li>
  <li><i class="fa fa-check-circle"></i>Dedicated server hosting</li>

  </ul>
</div>
<div class="price-button">
<a class="buy-btn" href="#">Get</a>
</div>
</div>
</div>
</div>
</div>
</section>
<!---------Testimonials------->
<section id="testimonials">
<div class="container">
<h1>Testimonials</h1>
<p class="text-center">Join BitRay. get more insight</p>
<div class="row">
<div class="col-md-4 text-center">
<div class="profile">
<img src="img/dope3.jpg" class="dope">
<blockquote>Experienced in development and branding. Greate creative software and talent.</blockquote>
<h3>Zero chills <span>Artist at TWA</span></h3>
</div>
</div>
<div class="col-md-4 text-center">
<div class="profile">
<img src="img/dope2.jpg" class="dope">
<blockquote>Experienced in development and branding. Greate creative software and talent.</blockquote>
<h3>Zero chills <span>Artist at TWA</span></h3>
</div>
</div>
<div class="col-md-4 text-center">
<div class="profile">
<img src="img/dope3.jpg" class="dope">
<blockquote>Experienced in development and branding. Greate creative software and talent.</blockquote>
<h3>Zero chills <span>Artist at TWA</span></h3>
</div>
</div>
</div>
</div>
</section>
<!----------Get in Touch----->
<section id="contact">

  <?php
    include "includes/contact_us.php";
   ?>

</section>

<!----------Footer------>
<?php
 include "includes/footer.php";
 ?>
<!-- <section id="footer"> -->
<!-- <div class="container text-center"> -->
<!-- <p><marquee>Home of african pop culture<i class="fa fa-heart-o"></marquee></i></p> -->
<!-- </div -->
<!---------Footer End------>
<!-- <script src="js/smooth-scroll.js"></script> -->
<!-- <script> -->
	<!-- var scroll = new SmoothScroll('a[href*="#"]'); -->
<!-- </script> -->




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js"></script>


<!-- Bootstrap bootstrap-touch-slider Slider Main JS File -->
<script src="bootstrap-touch-slider.js"></script>

<script type="text/javascript">
    $('#bootstrap-touch-slider').bsTouchSlider();
</script>




</body>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Oct 19, 2019 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

// Get today's date and time
var now = new Date().getTime();

// Find the distance between now and the count down date
var distance = countDownDate - now;

// Time calculations for days, hours, minutes and seconds
var days = Math.floor(distance / (1000 * 60 * 60 * 24));
var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((distance % (1000 * 60)) / 1000);

// var style= document.createElement('style');
// style.innerHTML=
// '.d{'+
// 'color:purple;'+
// 'background-color:#e5e5e5;'
// '
// }
// ';

// Display the result in the element with id="counter for mardigras"
document.getElementById("counter").innerHTML = days + "d " + hours + "h "
+ minutes + "m " + seconds + "s ";



// If the count down is finished, type the text to be displayed
if (distance < 0) {
clearInterval(x);
document.getElementById("counter").innerHTML = "EXPIRED";
}
}, 1000);
</script>

</html>
