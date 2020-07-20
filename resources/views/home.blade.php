@extends('layout.app');
@section('content')



@if( isset($notFound))


<div class="bg-danger"> Your url not found </div>


@endif

<div class="container-fluid  " style="margin-top: 20px; height:800px; padding-top:300px;  


background: url('image/bg-nature.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;




  "  >


    <div class="row p-5">


        <div class=" col-9  ">

             <form method="post" action="{{route('urlstore')}}">

             @csrf
            <div class="form-group">
                <input type="form"  name="url" class="form-control"  id="form" placeholder="Enter Url">
            </div>

            <div class="form-group">
                <input type="form"  name="shorten" class="form-control"  id="form2" placeholder="shorted  Url">
            </div>


        </div>




        <div class=" col-3">

        <button type="submit" style="width:100%" id="button2" class="btn btn-success ">Submit</button>

        </form>
        </div>
    </div>
   

</div>








<div class="container p-5">

    <div class="row jumbotron">

        <div class="col col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">

            <p class="jumbotext">
                A web service is indivisual for your web and everything for you
                theres you can found all of services like web hosting,E-commacre devlopment
                all is here ..

            </p>
        </div>

        <div class="col col-xs-12  col-sm-12 col-md-3 col-lg-3 col-xl-2">
            <button type="button" class="btn btn-outline btn-light btn-lg"> web service</button>


        </div>


    </div>


</div>

    




    <!-- ======= Services Section ======= -->
    <section id="services" class="services pb-5">
      <div class="container">

        <div class="section-title text-center p-5">
          <h2 class="">Services</h2>
          <h3>We Also do Some awesome <span>Services</span></h3>
          <p>Not only Url Short service,We also provide lots of service like <span> Web Design and devlopment,</span>.</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Website Design & Development</a></h4>
              <p class="description">We develop websites aiming for better user experience. Platform independence and mobile responsiveness are the key features of our product. </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-earth"></i></div>
              <h4 class="title"><a href="">Mobile & Desktop Application Development</a></h4>
              <p class="description">Our team has a strong foundation in mobile app development. We work closely with you to create apps that meet and exceed your business needs across a variety of platforms.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Digital Marketing</a></h4>
              <p class="description">Abasas IT will enhance your business by using digital marketing. We belief in grow together. We are using SMS, Email, Social Media Marketing Technology</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Web Security </a></h4>
              <p class="description">Keeping your data safe and secure is crucial. If you need extraordinary security for your website with SSL certificates, real-time monitoring - we have it all.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->                                 




<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-info text-light">
                    <h3>Abasas</h3>
                    <p>We develop websites aiming for better user experience.
                        Platform independence and mobile responsiveness are the key features of our product.
                        We build your website from scratch, with your input and feedback at every step of the development process.</p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">About us</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Services</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p class="text-light">

                        Head Office (USA)

                        Address: 168-14 88 th ave Jamaica NY 11432
                        Phone: +1 9293086108
                        E-mail: usa@abasas.tech

                    </p>

                    <div class="social-links">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p class="text-light">Commenced operations in January, 2014 with a team of inspired developers, Abasas IT is a startup IT firm located at New York,USA. We are dedicated to helping organizations convert creative ideas into tangible value by providing reliable software solutions..</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>Abasas</strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
      -->
            <h4 class="text-dark padding"> Designed by</h4> <a href="#">Sourov Ahmad (Abasas)</a>
        </div>
    </div>
</footer>


 


@endsection