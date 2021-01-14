<!DOCTYPE html>
<?php
include("conection.php");

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Suhana safar
    </title>
    <!-- |||||||||||||||Style Sheet ||||||||||||||||| -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/form.css">
    <!-- ||||||||||||||Bootstrap Style Sheet(fhramework)||||||||||||| -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- |||||||||||||| Icon Style |||||||||||||||||| -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- |||||||||||||||| Font Style  css ||||||||||||||||-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda&display=swap" rel="stylesheet">

</head>

<body>
    <!-- HEADER START  -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="suhana_safar_Logo">
                        <i class="fa fa-bars menu" style="font-size:24px" onclick="my_tab()"></i>
                        <img src=" images/trip_us_travel_logo.png " alt="trip_us_logo_in_balaghat " title="Suhana safar " class="pad-10 ">
                        <!--Logo Suhana safar-->
                    </div>
                    <!--/trip_ud_Logo-->
                </div>
                <!--/col-md-8-->
                <div class="col-md-8 ">
                    <div class="suhana_safar_Logo ">
                        <div class="my_company_details pad_10 ">
                            <ul class="navbar-nav nav pad_10 ">

                                <li><a href="tel:8224973413 "><i class="fa fa-phone " style="font-size:18px "></i> +91 8224973413</a></li>
                                <li><a href="mailto:suhanasafar@gmail.com "><i class="fa fa-envelope " style="font-size:18px;color:white; "></i> suhanasafar@gmail.com</a></li>
                                <li><a href="# "><i class="fa fa-map-marker " style="font-size:18px "></i> Ward No. 11 , Golibari Chowk, Warseoni</a></li>

                            </ul>
                        </div>
                        <!--//my_company_details -->
                    </div>
                    <!--/suhana_safar_Logo-->
                </div>
                <!--/col-md-4-->
            </div>
            <!--/row-->
        </div>
        <!--/container-->
    </header>
    <!--//HEADER END-->
    <!-- Navigation Start  -->
    <nav>
        <div class="container ">
            <div class="row ">
                <div class="col-md-6">
                    <div class="suhana_safar_nav ">
                        <ul class="navbar-nav nav ">
                            <li><a href="# ">Home</a></li>
                            <li><a href="# ">Our Fleets</a></li>
                            <li><a href="# ">Visit Cities</a></li>
                            <li><a href="# ">Offers</a></li>
                            <li><a href="# ">Gallery</a></li>
                            <li><a href="# ">About Us</a></li>


                        </ul>
                    </div>
                    <!--suhana_safar_nav-->
                </div>
                <!---col-md-6--->
                <div class="col-md-6">
                    <div class="suhana_safar_nav ">
                        <ul class="navbar-nav nav ">
                            <li><a href="# ">Booking</a></li>
                            <li><a href="# ">Contact Us</a></li>
                            <li><a href="# ">Popular Outstation Routes</a></li>
                            <li class=""><a href="#">Book Now</a></li>
                        </ul>
                    </div>
                    <!--suhana_safar_nav-->
                </div>
                <!---col-md-6--->
            </div>
            <!--row---->
        </div>
        <!---container--->
    </nav>
    <!--nav-->
    <!-- //Navigation -->

    <!--Slider Section Start---->
    <section>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/suhana_safar_travel_waraseoni.png" alt="Los Angeles">
                </div>

                <div class="item">
                    <img src="images/suhana_safar_travel_visit_nagpur.png" alt="Chicago">
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
    </section>
    <!--/section-->

    <!--Ticket article Start-->

    <!-- article start-->
    <article>
        <div class="container ">
            <div class="row ">
                <div class="col-md-12 ">
                    <div class=" ">
                        <h1>Go Where<span class="color-red "> You Want To Go</span></h1>
                        <p>Give us a chance to service you</p>
                    </div>
                </div>
                <!--col-md-12-->
                <!--Start Tickets for cities-->
                <div class="col-md-4 ">
                    <div class="tickets01 gondia_ticket ">
                        <a href="# "><img src="images/blaghat_to_gondia_balaghat_to_gondiya__tickets_.jpg " alt="warseoni_to_gondiya_tikets ">
                            <div class="tickets_content ">
                                <p>Balaghat to Gondia</p>
                                <p>10 rs./ Km</p>

                            </div>
                        </a>
                    </div>
                    <!--tiketes01-->
                </div>
                <!--col-md-4-->
                <div class="col-md-4 ">
                    <div class="tickets01 nagpur_ticket ">
                        <a href="# "><img src="images/nagpur_tickets_for_suhana_safar.jpg " alt="warseoni_to_gondiya_tikets ">
                            <div class="tickets_content ">
                                <p>Balaghat to Nagpur</p>
                                <p>9 rs./ Km</p>

                            </div>
                        </a>
                    </div>
                    <!--tiketes01-->
                </div>
                <!--col-md-4-->
                <div class="col-md-4 ">
                    <div class="tickets01 chhindwara_ticket ">
                        <a href="# "><img src="images/maa-tours-and-travels-jabalpur-city-jabalpur-trwdz.jpg " alt="warseoni_to_gondiya_tikets ">
                            <div class="tickets_content ">
                                <p>Balaghat to jabalpur</p>
                                <p><b>7 rs./ Km</b>
                                </p>

                            </div>
                        </a>
                    </div>
                    <!--tiketes01-->
                </div>
                <!-- //col-md-4 -->
            </div>
            <!--/row-->
        </div>
        <!--/container-->
    </article>
    <!--/article-->


    <!-- Fleets article Start -->
    <article>
        <div class="container ">
            <div class="row ">
                <div class="cities_heading ">
                    <h3>Meet our <span class="color-red ">Awesome Fleet</span></h3>
                    <p>The best way to travel to your destination
                    </p>
                </div>
                <!-- col-md-12 -->
                <div class="col-md-3 ">
                    <div class="my_fleet ">
                        <a href="# "><img src="images/POOLSIDE-BLUE.png " alt="comfortable_vagenR_for_an_beautifull_trip_with_shuana_safar_travels ">
                            <div class="fleet_content ">
                                <p> Maruti Suzuki Wagon R</p>
                                <p>Car No. Mp01 8739</p>
                                <ul>
                                    <li>
                                        comfortable & Affordable.
                                    </li>
                                    <li>
                                        6 seater & space
                                    </li>
                                </ul>
                            </div>
                            <!--fleet _content-->
                        </a>
                        <!--/anchor_dtails-->
                    </div>
                </div>
                <!--/my_fleet-->
                <!---/col-md-3-->
                <div class="col-md-3 ">
                    <div class="my_fleet ">
                        <a href="# "><img src="images/Hyundai-i20-Car-PNG-Image.png " alt="comfortable_vagenR_for_an_beautifull_trip_with_shuana_safar_travels ">
                            <div class="fleet_content ">
                                <p>Hyundai-i20</p>
                                <p>Car No. MP01 8739</p>
                                <ul>
                                    <li>
                                        comfortable & Affordable.
                                    </li>
                                    <li>
                                        6 seater & big space
                                    </li>
                                </ul>
                            </div>
                            <!--fleet _content-->
                        </a>
                        <!--/anchor_dtails-->
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="my_fleet ">
                        <a href="# "><img src="images/innova_tour_for_suhana_safar.png " alt="comfortable_vagenR_for_an_beautifull_trip_with_shuana_safar_travels ">
                            <div class="fleet_content ">
                                <p>TATA Innova</p>
                                <p>Car No. MP01 8739</p>
                                <ul>
                                    <li>
                                        comfortable & Affordable.
                                    </li>
                                    <li>
                                        6 seater & big space
                                    </li>
                                </ul>
                            </div>
                            <!--fleet _content-->
                        </a>
                        <!--/anchor_dtails-->
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="my_fleet ">
                        <a href="# "><img src="images/scorpio_tour_for_suhana_safar.png " alt="comfortable_vagenR_for_an_beautifull_trip_with_shuana_safar_travels ">
                            <div class="fleet_content ">
                                <p>Mahindra Scorpio</p>
                                <p>Car No. MP01 8739</p>
                                <ul>
                                    <li>
                                        comfortable & Affordable.
                                    </li>
                                    <li>
                                        6 seater & big space
                                    </li>
                                </ul>
                            </div>
                            <!--fleet _content-->
                        </a>
                        <!--/anchor_dtails-->
                    </div>
                </div>
            </div>
            <!-- ///row -->
        </div>
        <!-- //container -->
    </article>
    <!-- //article -->

    <!--Why Us Article Start-->
    <article>
        <div class="container ">
            <div class="row ">
                <div class="col-md-12 ">
                    <div class="w3hy_us_suhana_safar ">
                        <h4>Why <span class="color-red ">Suhana Safar</span></h4>
                        <p>The best way to travel to your destination</p>
                    </div>
                </div>
                <!--col-md-12-->
                <div class="col-md-3 ">
                    <div class="why_us_content text-center ">
                        <img src="images/00000000368.jpg " alt=" ">
                        <p>Cabs for Every Pocket</p>
                    </div>
                    <!--/why_us_content-->
                </div>
                <!--/col-md-3-->
                <div class="col-md-3 ">
                    <div class="why_us_content text-center ">
                        <img src="images/00000000370.jpg " alt=" ">
                        <p>Secure and Safer Rides</p>
                    </div>
                    <!--/why_us_content-->
                </div>
                <!--/col-md-3-->
                <div class="col-md-3 ">
                    <div class="why_us_content text-center ">
                        <img src="images/00000000382.jpg " alt=" ">
                        <p>Share and Express</p>
                    </div>
                    <!--/why_us_content-->
                </div>
                <!--/col-md-3-->
                <div class="col-md-3 ">
                    <div class="why_us_content text-center ">
                        <img src="images/00000000372.jpg " alt=" ">
                        <p>Cashless Rides</p>
                    </div>
                    <!--/why_us_content-->
                </div>
                <!--/col-md-3-->
            </div>
            <!-- //row -->
        </div>
        <!--container-->
    </article>
    <!-- //article -->
    <!--//Why Suhana Safar--->

    <!--reservation form article start -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="myreservation_form">
                        <h5>Booking Form<span class="color-red"> Inquiry</span</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name..." name="fname">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name..." name="lname">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="PICKUP Address..." name="P_adress">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Drop Address..." name="D_adress">
                            </div>
                            <div class="form-group">
                                <input type="Date" class="form-control" placeholder="Date..." name="Date">
                            </div>
                            <div class="form-group">
                                <input type="time" class="form-control" placeholder="When you want to go ??..." name="time">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="E-mail..." name="email">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="Phone..." name="phone">
                            </div>
                            <div class="form-group">
                                <textarea name="paramanent_address" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <input type="submit" name="submit" class="sub_btn">
                        </form>
                    </div>
                    <!-- //myreservation_form -->
                </div>
                <!-- //col-md-8 -->
            </div>
            <!-- //row -->
        </div>
        <!-- //container -->
    </article>
    <!-- //article -->
    <!-- //reservation form article -->


    <!-- Suhana_safar footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="my_footer_widget">
                        <p>Out Of Cities</p>
                        <hr>
                        <ul>
                            <li><a href="#">Balaghat to Jabalpur</a></li>
                            <li><a href="#">Balaghat to Katni</a></li>
                            <li><a href="#">Balaghat to Chhindwara</a></li>
                            <li><a href="#">Balaghat to Seoni</a></li>
                            <li><a href="#">Balaghat to Bhopal</a></li>
                            <li><a href="#">Balaghat to Indore</a></li>
                            <li><a href="#">Balaghat to Ujjain</a></li>
                            <li><a href="#">Balaghat to Sagar</a></li>
                        </ul>
                    </div>
                </div>
                <!--///col-md-4-->
                <div class="col-md-4">
                    <div class="my_footer_widget">
                        <p>Out Of States</p>
                        <hr>
                        <ul>
                            <li><a href="#">Balaghat to Gondia</a></li>
                            <li><a href="#">Balaghat to Bilaspur</a></li>
                            <li><a href="#">Balaghat to Raipur</a></li>
                            <li><a href="#">Balaghat to Bhilai</a></li>
                            <li><a href="#">Balaghat to Nagpur</a></li>
                            <li><a href="#">Balaghat to Uttar Pradesh</a></li>
                            <li><a href="#">Balaghat to Raigar</a></li>
                            <li><a href="#">Balaghat to Durg</a></li>
                        </ul>
                    </div>
                </div>
                <!--///col-md-4-->
                <div class="col-md-4">
                    <div class="my_footer_widget">
                        <p>Connect With Us in Social Media</p>
                        <hr>
                        <ul class="navbar-nav nav">
                            <li><a href="#"><i class="fa fa-facebook-square" style="font-size:35px"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" style="font-size:35px"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter-square" style="font-size:35px"></i></a></li>

                        </ul>

                        <ul class="navbar-nav nav">
                            <li><a href="#">About Suhana Safar</a></li>
                            <li>
                                <a href="#">Offers</a>
                            </li>
                            <li><a href="#">Book a ride</a></li>

                        </ul>

                    </div>
                    <!--//col-md-4--->

                </div>
                <!--///col-md-4-->
            </div>
            <!--//row-->
            <hr>
            <div class="col-md-8">
                <div class="my_footer_down_widgets">
                    <ul>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                    <hr>
                </div>
                <!--//my_footer_down_widgets-->
            </div>
            <!--/col-md-6--->
            <div class="col-md-4">
                <p class="copy_right">Copyright © 2021 Avenue Design Pvt. Ltd. All rights reserved.</p>
            </div>
            <!--col-md-4-->
        </div>
        <!--//container-->
    </footer>
    <!-- //footer -->



    <script src="javascript/custum.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	
    <?php
     
	  $fn = $_GET['fname'];
	  $ln = $_GET['lname'];
      $p_add = $_GET['P_adress']; 
      $d_add = $_GET['D_adress'];
	  $date = $_GET['Date'];
	  $tm = $_GET['time'];
	  $em = $_GET['email'];
	  $phn = $_GET['phone'];
	  $perm_Ad = $_GET['paramanent_address'];
	  
	 $query = "INSERT INTO Suhana_Safar_database  VALUES ('$fn','$ln','$p_add','$d_add','$date','$tm','$em','$phn','$perm_Ad')";
	 
	 $data = mysqli_query($conn,$query);
	 
	 if($data){
		 echo "Data Subbmited Succesfully";
		 
	 }else{
		 echo  "faild to Data";
	 }
	  
    ?>
	
	


</body>



</html>