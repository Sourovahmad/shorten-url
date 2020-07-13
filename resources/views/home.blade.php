@extends('layout.app');
@section('content')



@if( isset($notFound))


<div class="bg-danger"> Your url not found </div>


@endif



<div class=" container-fluid " style="margin-top:200px;">

    <div class="row  bg-dark m-5 ">


        <div class="col col-12 text-light  mt-5 h-100">




            <form method="post" action="{{route('urlstore')}}">
                @csrf

                <div class="form-group">
                    <label for="Url">Enter Your URL</label>
                    <input type="text" name="url" class="form-control" id="Url" aria-describedby="emailHelp" placeholder="Enter Url">

                </div>




                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </form>




        </div>


    </div>



</div>



<div class="container">

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
            Designed by <a href="https://bootstrapmade.com/">Sourov Ahmad (Abasas)</a>
        </div>
    </div>
</footer>





@endsection