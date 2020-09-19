<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Jason Chu | Web Developer | Full Stack Developer</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Jason Chu</a><button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#developer">Web Developer</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <img src="images/jason.jpg" class="img-fluid" alt="">

        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Hello World</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <h6 style="text-align: center;">Its me Jason Chu</h6>
            </div>
        </section>
        
        <!-- Web Developer-->
        <section class="page-section bg-secondary text-white mb-0" id="developer" style="padding: 0%;">
            <div class="row container-fluid">
                <div class="col-md-8" style="padding: 0%;">
                    <div class="container">
                        <img src="images/dev.jpg" class="img-fluid" style="width: 80%; height: 80%; margin-left: 5%; margin-top: 5%; margin-bottom: 10%;">
                    </div>
                    
                </div>
                <div class="col-md-4">
                    <div class="container" style="padding-bottom: 10%;">
                        <h3 class="vertical-center text-center">PHP Developer && Web And Mobile Software Tester</h3>
                    </div>
                    
                </div>
            </div>
        </section>

        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">About Us</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 mr-auto">
                        <p class="lead text-center">
                            Profile
                        </p>
                        <span>
                            To give contribution to the organization to the best of my ability, 
                            to develop new skills, to share my knowledge 
                            while interacting with others and gaining experience.  
                        </span>
                        <p class="lead text-center">About</p>
                        <span>
                            and I'm currently working as a Mobile/Web Application Tester at Tokket.inc 
                            and also a web develope, UI/UX Designer. 
                        </span>
                    </div>
                    <div class="col-lg-4 mr-auto">
                        <p class="lead text-center">
                            List Of Previous Projects
                            <ul>
                                <li>PSD -> HTML</li>
                                <li>PSD/PDF -> Powerpoint</li>
                                <li>Student Information System</li>
                                <li>E-bussiness</li>
                                <li>Information Company Website</li>
                                <li>Online Voting System</li>
                                
                            </ul>
                        </p>
                    </div>
                    <div class="col-lg-4 mr-auto">
                        <p class="lead text-center">
                            Technology Used:
                            <ul>
                                <li>PHP</li>
                                <li>Laravel (PHP Framework)</li>
                                <li>React Js (Javascript Library)</li>
                                <li>Sass</li>
                                <li>Media Query (CSS Responsive)</li>
                                <li>HTML5 && CSS3</li>
                                <li>Bootstrap3 && Bootstrap4</li>
                                <li>Javascript, Jquery</li>
                                <li>MySQL</li>
                                <li>Visual Studio Code (Text Editor)</li>
                                <li>GitHub</li>
                                <li>Figma & Axure (Designing Tools)</li>
                                <li>Microsoft Word, Powerpoint, Excel, Spreadsheet</li>
                                <li>Visual Studio Code</li>
                            </ul>
                        </p>
                    </div>
                </div>
                {{-- <!-- About Section Button-->
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/themes/freelancer/"><i class="fas fa-download mr-2"></i>Free Download!</a>
                </div> --}}
            </div>
        </section>

        <!--Resume-->
        {{-- to be fix soon xD--}}
        {{-- <section class="page-section bg-secondary text-white mb-0" id="resume">
            <div class="container-fluid">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Resume</h2>
                <p  class="text-center">You can download my updated resume here! just click download...</p>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="divider-custom divider-light">
                    <div class="divider-custom-icon">
                        <a href="download">
                            <button class="btn" style="background-color: #1abc9c; color: white;">Click To Download</button>
                        </a>
                    </div>
                </div>
            </div>
        </section> --}}
      


       
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">Zone 1 Elias Corporal Street San Agustin Iriga City</p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">FOLLOW ME</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/jasonchu009" target="_blank"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/jchu24608" target="_blank"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/piiiiikaaaaachu/" target="_blank"><i class="fab fa-fw fa-instagram"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">CONTACT</h4>
                        <p class="lead mb-0">Email: freelance.jason24608@gmail.com </p>
                        <p class="lead md-0">Contact Number: (+69) 982634391</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <section class="copyright py-4 text-center text-white">
            <div class="container"><small> © Json 2020</small></div>
        </section>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="{{ asset('assets/mail/jqBootstrapValidation.js') }}"></script>
        <script src="{{ asset('assets/mail/contact_me.js') }}"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>
