<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Softwere</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- owl carousel style -->
   <link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css" />
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
</head>

<body>
   <!--header section start -->
  
   <!--header section end -->
   <!--costume header section start -->
   <div class="costume_header">
      <div class="container">
         <div class="menu_main">
            <ul>
              <li><a href="{{route('update')}}">Update comlpaints</a></li>
            </ul>
         </div>
      </div>
   </div>
   <!--costume header section end -->
   <!-- about section start -->
   @yield('updatecomplaints')
   <div class="about_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <h1 class="about_taital">About Softwares</h1>
               <p class="about_text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in
                  a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                  Latin professor at Hampden</p>
               <div class="read_bt"><a href="#">Read More</a></div>
            </div>
            <div class="col-md-6">
               <div><img src="images/img-1.png" class="image_1"></div>
            </div>
         </div>
      </div>
   </div>
   <!--about section end -->
   <!--services section start -->
   <div class="services_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <h1 class="services_taital">What We Do </h1>
               <div class="image_2"><img src="images/img-2.png"></div>
            </div>
            <div class="col-md-6">
               <div class="box_main">
                  <h1 class="technology_text">New Technology</h1>
                  <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the majority
                     have suffered alteration in some form, by injected humour</p>
                  <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the majority
                     have suffered alteration in some form, by injected humour</p>
               </div>
               <div class="readmore_bt"><a href="#">Read More</a></div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="image_2"><img src="images/img-3.png"></div>
            </div>
            <div class="col-md-6">
               <div class="box_main">
                  <h1 class="technology_text">Long Live UX</h1>
                  <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the majority
                     have suffered alteration in some form, by injected humour</p>
               </div>
               <div class="readmore_bt"><a href="#">Read More</a></div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="image_2"><img src="images/img-4.png"></div>
            </div>
            <div class="col-md-6">
               <div class="box_main">
                  <h1 class="technology_text">Web Trends</h1>
                  <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the majority
                     have suffered alteration in some form, by injected humour</p>
               </div>
               <div class="readmore_bt"><a href="#">Read More</a></div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="image_2"><img src="images/img-5.png"></div>
            </div>
            <div class="col-md-6">
               <div class="box_main">
                  <h1 class="technology_text">User Interfaces</h1>
                  <p class="dummy_text">There are many variations of passages of Lorem Ipsum available, but the majority
                     have suffered alteration in some form, by injected humour</p>
               </div>
               <div class="readmore_bt"><a href="#">Read More</a></div>
            </div>
         </div>
      </div>
   </div>
   <!--services section end -->
   <!--software section start -->
   <div class="software_section layout_padding">
      <div class="container">
         <h1 class="software_taital">Our Software</h1>
         <p class="software_text">There are many variations of passages of Lorem Ipsum available, but the majority have
            suffered alteration in some form, by injected humour</p>
         <div class="software_section_2 layout_padding">
            <div class="owl-carousel">
               <div>
                  <img src="images/img-6.png" class="image_6">
                  <h4 class="ipsum_text">Ipsum available,</h4>
               </div>
               <div>
                  <img src="images/img-7.png" class="image_6">
                  <h4 class="ipsum_text">Ipsum available,</h4>
               </div>
               <div>
                  <img src="images/img-8.png" class="image_6">
                  <h4 class="ipsum_text">Ipsum available,</h4>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--software section end -->
   <!--works section start -->
   <div class="works_section layout_padding">
      <div class="container">
         <h1 class="work_taital">How It Works</h1>
         <div class="works_section_2 layout_padding">
            <div class="row">
               <div class="col-sm-4">
                  <h3 class="fully_text">FULLY RESPONSIVE</h3>
                  <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                     incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                     ullamco laboris nisi ut aliquip ex ea commodo</p>
               </div>
               <div class="col-sm-4">
                  <h3 class="fully_text">WELL DOCUMENTED</h3>
                  <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                     incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                     ullamco laboris nisi ut aliquip ex ea commodo</p>
               </div>
               <div class="col-sm-4">
                  <h3 class="fully_text">EASY TO USE</h3>
                  <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                     incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                     ullamco laboris nisi ut aliquip ex ea commodo</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--works section end -->
   <!--contact section start -->
   <div class="contact_section layout_padding">
      <div class="container">
         <h1 class="work_taital">Get In Touch</h1>
      </div>
   </div>
   <div class="contact_section_2">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-6 padding_0">
               <div><img src="images/img-10.png" class="image_10"></div>
            </div>
            <div class="col-md-6">
               <div class="email_text">
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Name" name="Email">
                  </div>
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Email" name="Email">
                  </div>
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Phone Numbar" name="Email">
                  </div>
                  <div class="form-group">
                     <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                  </div>
                  <div class="send_btn"><a href="#">SEND</a></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--contact section end -->
   <!--footer section start -->
   <div class="footer_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-5 col-sm-6">
               <div class="footer_logo"><img src="images/footer-logo.png"></div>
               <p class="dolor_text">There are many variations of passages of Lorem Ipsum available, but the majority
                  have suffered alteration in some form, by injected humour, or </p>
            </div>
            <div class="col-lg-3 col-sm-6">
               <h4 class="address_text">Adderes</h4>
               <p class="dolor_text">passages of Lorem Ipsum available, but the majority have</p>
               <p class="dolor_text">(+71) 9876543210</p>
               <p class="dolor_text">demo@gmail.com</p>
            </div>
            <div class="col-lg-4 col-sm-12">
               <h4 class="address_text">Newsletter</h4>
               <input type="text" class="mail_text" placeholder="Enter your email" name="Enter your email">
               <div class="subscribe_bt"><a href="#">Subscribe</a></div>
            </div>
         </div>
         <div class="social_icon">
            <ul>
               <li><a href="#"><img src="images/fb-icon.png"></a></li>
               <li><a href="#"><img src="images/twitter-icon.png"></a></li>
               <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
               <li><a href="#"><img src="images/instagram-icon.png"></a></li>
            </ul>
         </div>
      </div>
   </div>
   <!--footer section end -->
   <!-- copyright section start -->
   <div class="copyright_section">
      <div class="copyright_text">Copyright 2019 All Right Reserved By <a href="https://html.design">Free html
            Templates</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a></div>
   </div>
   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <!-- javascript -->
   <script src="js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <script type="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2//2.0.0-beta.2.4/owl.carousel.min.js"></script>
   <script>
      var $owl = $('.owl-carousel');

      $owl.children().each(function (index) {
         $(this).attr('data-position', index); // NB: .attr() instead of .data()
      });

      $owl.owlCarousel({
         center: true,
         loop: true,
         items: 3,
      });

      $(document).on('click', '.owl-item>div', function () {
         // see https://owlcarousel2.github.io/OwlCarousel2/docs/api-events.html#to-owl-carousel
         var $speed = 300;  // in ms
         $owl.trigger('to.owl.carousel', [$(this).data('position'), $speed]);
      });

   </script>
</body>

</html>