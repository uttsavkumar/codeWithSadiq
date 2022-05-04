<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <div class="nav navbar navbar-expand-lg navbar-dark" style="background-image: linear-gradient(to right, rgba(32, 40, 119, 1), rgba(55, 46, 149, 1), rgba(83, 49, 177, 1), rgba(114, 48, 205, 1), rgba(150, 41, 230, 1)) ">
        <div class="container">
            <a href="{{ route('/') }}" class="navbar-brand text-white" style="flex-grow: 30">Code with SadiQ</a>
            <button class="navbar-toggler " style="border: 1px solid white"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon " >
                </span>
              </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav" >
                <li class="nav-item"><a href="{{ route('/') }}" class="nav-link text-white p-3">Home</a></li>
                <li class="nav-item"><a href="{{ route('Home.course') }}" class="nav-link text-white p-3">Courses</a></li>
                <li class="nav-item"><a href="{{ route('Home.onlinepayment') }}" class="nav-link text-white p-3">Online Payment</a></li>
                <li class="nav-item"><a href="{{ route('Home.apply') }}" class="nav-link text-dark btn btn-warning p-2 mt-2 ms-2">Apply for Admission</a></li>
            </ul>
          </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@section('content')
@show



<div class="footer-top pt-150 pt-5 bg-primary" style="margin-top:100px">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-12 col-lg-4 mb-4 mb-md-4 mb-sm-4 mb-lg-0">
                <div class="footer-nav-wrap text-white">
                    
                    <h4 class="h3 text-white">CodeWithSadiQ</h4>
                    <p></p>

                    <div class="social-list-wrap">
                        <ul class="social-list list-inline list-unstyled">
                            <li class="list-inline-item"><a href="#" target="_blank" title="Facebook"><span class="ti-facebook"></span></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank" title="Twitter"><span class="ti-twitter"></span></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank" title="Instagram"><span class="ti-instagram"></span></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank" title="printerst"><span class="ti-pinterest"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-8">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-4 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
                        <div class="footer-nav-wrap text-white">
                            <h5 class="mb-3 text-white">Quick Links</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><a href="{{ route('/') }}" class="text-white">Home</a></li>
                                <li class="mb-2"><a href="#" class="text-white">About</a></li>
                                <li class="mb-2"><a href="#" class="text-white">Projects</a></li>
                                <li class="mb-2"><a href="#" class="text-white">Workshop</a></li>
                                <li class="mb-2"><a href="#" class="text-white">Hire us</a></li>
                              
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
                        <div class="footer-nav-wrap text-white">
                            <h5 class="mb-3 text-white">About Class</h5>
                            <ul class="list-unstyled support-list">
                                <li class="mb-2">
                                    <a href="#" class="text-white">About Instructor</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-white">MileStones </a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-white">Vision</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-white">Community</a>
                                </li>
                                <li class="mb-2">
                                    <a href="#" class="text-white">Our Team</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-5">
                        <div class="footer-nav-wrap text-white">
                            <h5 class="mb-3 text-white">Location</h5>
                            <ul class="list-unstyled support-list">
                                <li class="mb-2 d-flex align-items-center"><span class="ti-location-pin mr-2"></span>
                                    Ramavtar Market, Near Dog Hospital,
                                    <br>Thana Chowk, Gandhinagar, Madhubani, Purnea - 854301
                                </li>
                                <li class="mb-2 d-flex align-items-center"><span class="ti-mobile mr-2"></span> <a href="tel:+61283766284"> +91 95 4680 5580</a></li>
                                <li class="mb-2 d-flex align-items-center"><span class="ti-email mr-2"></span><a href="mailto:mail@example.com"> cwspurnea@gmail.com</a></li>
                                <li class="mb-2 d-flex align-items-center"><span class="ti-world mr-2"></span><a href="#"> www.codewithsadiq.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer bottom copyright start-->
    <div class="footer-bottom border-gray-light mt-5 py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-12">
                    <div class="copyright-wrap small-text w-100">
                        <p class="mb-0 text-white text-center">© Code with SadiQ, All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer bottom copyright end-->
</div>
</body>
</html>