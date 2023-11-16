<?php
session_start();
if(isset($_POST['book_room'])){
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"our_hotel");
  if($_POST['room_type'] == 'Single Non AC'){
   $query = "UPDATE single_non_ac set holder_name = '$_POST[holder_name]', holder_id = $_POST[holder_id],holder_mobile = '$_POST[holder_mobile]',holder_addresss = '$_POST[holder_address]',child = $_POST[child_no],adult = $_POST[adult_no],in_date = '$_POST[in_date]',out_date = '$_POST[out_date]',status = 1 where room_no = $_POST[room_no]";
  }
  if($_POST['room_type'] == 'Single AC'){
   $query = "UPDATE single_ac set holder_name = '$_POST[holder_name]', holder_id = $_POST[holder_id],holder_mobile = '$_POST[holder_mobile]',holder_address = '$_POST[holder_address]',child = $_POST[child_no],adult = $_POST[adult_no],in_date = '$_POST[in_date]',out_date = '$_POST[out_date]',status = 1 where room_no = $_POST[room_no]";
  }
  if($_POST['room_type'] == 'Double Non AC'){
   $query = "UPDATE double_non_ac set holder_name = '$_POST[holder_name]', holder_id = $_POST[holder_id],holder_mobile = '$_POST[holder_mobile]',holder_address = '$_POST[holder_address]',child = $_POST[child_no],adult = $_POST[adult_no],in_date = '$_POST[in_date]',out_date = '$_POST[out_date]',status = 1 where room_no = $_POST[room_no]";
  }
  if($_POST['room_type'] == 'Double AC'){
   $query = "UPDATE double_ac set holder_name = '$_POST[holder_name]', holder_id = $_POST[holder_id],holder_mobile = '$_POST[holder_mobile]',holder_address = '$_POST[holder_address]',child = $_POST[child_no],adult = $_POST[adult_no],in_date = '$_POST[in_date]',out_date = '$_POST[out_date]',status = 1 where room_no = $_POST[room_no]";
  }
  $query_run = mysqli_query($connection, $query);
  //header("Location:redirect_page.php");
  if($query_run){
    echo "<script> alert('Room Booked Successfully!!!');
    window.location.href = '../payment.php';
     </script>";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
 <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="image/favicon.png" type="image/png">
        <title>Royal Hotel</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../vendors/linericon/style.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="../vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
  <title> Book Room </title>

   <style>
    body,section {background-image: url(image/facilites_bg.jpg);
            background-size: cover;
            background-attachment: fixed;} 

    h3 {color: #fcfffd;
      text-shadow: 2px 2px #2602f0;}
    h5 {color: green;}      
  </style> 
</head>
<!--================Header Area =================-->
          <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg fixed-top">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="image/Logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="about.html">About us</a></li>
                            <li class="nav-item"><a class="nav-link" href="accomodation.html">Accomodation</a></li>
                            <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="blog-single.html">Blog Details</a></li>
                                </ul>
                            </li> 
                            <li class="nav-item"><a class="nav-link" href="elements.html">Elemests</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        </ul>
                    </div> 
                </nav>
            </div>
          </header>
        <br><br><br><br>
       <!--================ Header Area =================-->
<body>
	<section id="register">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4 m-auto-block">
        <center> <h3> Fill & Book Your Room </h3> </center>
        <form action="" method="post" class="shadow p-4 bg-light">
          <div class="form-group">
            <label><h5> Room No: </h5></label>
            <input type="text" name="room_no" value="<?php echo $_GET['rn'];?>" class="form-control" required>
          </div>
          <div class="form-group">
            <label><h5> Room Type: </h5></label>
            <input type="text" name="room_type" value="<?php if($_GET['rt']=='a'){echo 'Single Non AC';}if($_GET['rt']=='b'){echo 'Single AC';} if($_GET['rt']=='c'){echo 'Double Non AC';} if($_GET['rt']=='d'){echo 'Double AC';}?>" class="form-control" required>
          </div>
          <div class="form-group">
            <label><h5> Holder Name: </h5></label>
            <input type="text" name="holder_name" class="form-control" required>
          </div>
          <div class="form-group">
            <label><h5> Holder ID: </h5></label>
            <input type="text" name="holder_id" class="form-control" required>
          </div>
          <div class="form-group">
            <label><h5> Holder Mobile: </h5></label>
            <input type="text" name="holder_mobile" class="form-control" required>
          </div>
          <div class="form-group">
            <label><h5> Holder Address: </h5></label>
            <textarea rows="3" cols="40" class="form-control" name="holder_address" required></textarea>
          </div>
          <div class="form-group">
            <label><h5> No. of Child: </h5></label>
            <select class="form-control" name="child_no">
              <option>--select--</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4+</option>
            </select>
          </div>
          <div class="form-group">
            <label><h5> No. of Adult: </h5></label>
            <select class="form-control" name="adult_no">
              <option>--select--</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4+</option>
            </select>
          </div>
          <div class="form-group">
            <label><h5> Check-in Date: </h5></label>
            <input type="date" name="in_date" class="form-control" required>
          </div>
          <div class="form-group">
            <label><h5> Check-out Date: </h5></label>
            <input type="date" name="out_date" class="form-control" required>
          </div>
          <button type="submit" name="book_room" class="btn btn-success"> Book Now </button> 
        </form>
        <div class="col-md-4"></div>
      </div>
    </div>
  </section>


  <!--================ start footer Area  =================-->  
        <footer class="footer-area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">About Agency</h6>
                            <p>The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Navigation Links</h6>
                            <div class="row">
                                <div class="col-4">
                                    <ul class="list_style">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Feature</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Portfolio</a></li>
                                    </ul>
                                </div>
                                <div class="col-4">
                                    <ul class="list_style">
                                        <li><a href="#">Team</a></li>
                                        <li><a href="#">Pricing</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>                    
                            </div>              
                        </div>
                    </div>              
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Newsletter</h6>
                            <p>For business professionals caught between high OEM price and mediocre print and graphic output, </p>   
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>   
                                    </div>                  
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h6 class="footer_title">InstaFeed</h6>
                            <ul class="list_style instafeed d-flex flex-wrap">
                                <li><img src="image/instagram/Image-01.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-02.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-03.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-04.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-05.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-06.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-07.jpg" alt=""></li>
                                <li><img src="image/instagram/Image-08.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>            
                </div>
                <div class="border_line"></div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.facebook.com/avilashsaha.akash" target="_blank">Avilash Saha</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class="col-lg-4 col-sm-12 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    <!--================ End footer Area  =================-->
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="js/custom.js"></script>
</body>
</html>