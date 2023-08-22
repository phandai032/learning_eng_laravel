<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" href="{{URL::asset('/images/topics/logo.png')}}" sizes="32x32" />
        <title>ENG LEARNING</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="{{URL::asset('/css/bootstrap.min.css')}}" rel="stylesheet">

        <link href="{{URL::asset('/css/bootstrap-icons.css')}}" rel="stylesheet">

        <link href="{{URL::asset('/css/templatemo-topic-listing.css')}}" rel="stylesheet">      

    </head>
    
    <body id="top">

        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="/index">
                        <i class="bi-back"></i>
                        <span>LEARN</span>
                    </a>

                    <div class="d-lg-none ms-auto me-4">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-5 me-lg-auto">
                        </ul>

                        <div class="d-none d-lg-block">
                            <a href="/login" class="navbar-icon bi-person smoothscroll"></a>
                        </div>
                    </div>
                </div>
            </nav>
            

            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-12 mx-auto">
                            <h3 class="text-white text-center">REGISTER</h3>
                        </div>

                    </div>
                </div>
            </section>


            <section class="featured-section1">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-2 col-2"></div>
                        <div class="col-lg-8 col-8">
                            <div class="custom-block custom-block-overlay">
                                <div class="d-flex flex-column h-100">
                                    <img src="{{URL::asset('images/index_banner.jpg')}}" class="custom-block-image img-fluid" alt="">
                                    <form class="custom-block-overlay-text" action="#">
                                        <div class="mb-3 mt-3">
                                          <label for="email" class="form-label"><b>Email:</b></label>
                                          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                        </div>
                                        <div class="mb-3">
                                          <label for="pwd" class="form-label"><b>Password:</b></label>
                                          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                                        </div>
                                        <div class="mb-3">
                                            <label for="pwd" class="form-label"><b>Re-Password:</b></label>
                                            <input type="password" class="form-control" id="pwd" placeholder="Re-Enter password" name="pswd">
                                          </div>
                                        <div class="form-check mb-3">
                                          <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="remember">You agree to our Terms, Privacy Policy and Cookies Policy.
                                          </label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="register" class="custom-btn2 btn col-lg-2 col-2 col-sm-2">Register</button>
                                        </div>
                                      </form>
                                    <div class="section-overlay1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-2"></div>
                    </div>
                </div>
            </section>

            
        </main>




        <!-- JAVASCRIPT FILES -->
        <script src="{{URL::asset('/js/jquery.min.js')}}"></script>
        <script src="{{URL::asset('/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{URL::asset('/js/jquery.sticky.js')}}"></script>
        <script src="{{URL::asset('/js/click-scroll.js')}}"></script>
        <script src="{{URL::asset('/js/custom.js')}}"></script>

    </body>
</html>