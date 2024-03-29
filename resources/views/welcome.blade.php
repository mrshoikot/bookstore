<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kagoz</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>


        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="css/bostorek/bootstrap.css" />
        <!-- font awesome style -->
        <link href="css/bostorek/font-awesome.min.css" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="css/bostorek/style.css" rel="stylesheet" />
        <!-- responsive style -->
        <link href="css/bostorek/responsive.css" rel="stylesheet" />

    </head>
    <body class="antialiased">

        <div class="hero_area">
            <!-- header section strats -->
            <header class="header_section">
              <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="index.html">
                    <span>
                        <img src="/images/logo-white.png" alt="logo">
                    </span>
                  </a>
        
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                  </button>
        
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                      <li class="nav-item active">
                        <a class="nav-link pl-lg-0" href="/">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"> About</a>
                      </li>
                      @auth
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('books.index')}}"> Browse Books</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('profile')}}"> Profile</a>
                      </li>
                      @endauth
                      @guest
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">Register</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Login</a>
                      </li>
                      @endguest
                    </ul>
                    @auth
                    
                    <form class="search_form" action="{{route("books.index")}}">
                      <input type="text" class="form-control" name="search" placeholder="Search here...">
                      <button class="" type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i>
                      </button>
                    </form>
                    @endauth
                  </div>
                </nav>
              </div>
            </header>
            <!-- end header section -->
            <!-- slider section -->
            <section class="slider_section ">
              <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="container ">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="detail-box">
                            <h5>
                              Bostorek Bookstore
                            </h5>
                            <h1>
                              For All Your <br>
                              Reading Needs
                            </h1>
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quam velit saepe dolorem deserunt quo quidem ad optio.
                            </p>
                            <a href="">
                              Read More
                            </a>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="img-box">
                            <img src="images/slider-img.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="container ">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="detail-box">
                            <h5>
                              Bostorek Bookstore
                            </h5>
                            <h1>
                              For All Your <br>
                              Reading Needs
                            </h1>
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quam velit saepe dolorem deserunt quo quidem ad optio.
                            </p>
                            <a href="">
                              Read More
                            </a>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="img-box">
                            <img src="images/slider-img.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="container ">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="detail-box">
                            <h5>
                              Bostorek Bookstore
                            </h5>
                            <h1>
                              For All Your <br>
                              Reading Needs
                            </h1>
                            <p>
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quam velit saepe dolorem deserunt quo quidem ad optio.
                            </p>
                            <a href="">
                              Read More
                            </a>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="img-box">
                            <img src="images/slider-img.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel_btn_box">
                  <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </section>
            <!-- end slider section -->
          </div>
        
        
          <!-- catagory section -->
        
          <section class="catagory_section layout_padding">
            <div class="catagory_container">
              <div class="container ">
                <div class="heading_container heading_center">
                  <h2>
                    Books Categories
                  </h2>
                  <p>
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                  </p>
                </div>
                <div class="row">
                  <div class="col-sm-6 col-md-4 ">
                    <div class="box ">
                      <div class="img-box">
                        <img src="images/cat1.png" alt="">
                      </div>
                      <div class="detail-box">
                        <h5>
                          Textbooks
                        </h5>
                        <p>
                          fact that a reader will be distracted by the readable content of a page when looking at its layout.
                          The
                          point of using
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 ">
                    <div class="box ">
                      <div class="img-box">
                        <img src="images/cat2.png" alt="">
                      </div>
                      <div class="detail-box">
                        <h5>
                          Science
                        </h5>
                        <p>
                          fact that a reader will be distracted by the readable content of a page when looking at its layout.
                          The
                          point of using
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 ">
                    <div class="box ">
                      <div class="img-box">
                        <img src="images/cat3.png" alt="">
                      </div>
                      <div class="detail-box">
                        <h5>
                          History
                        </h5>
                        <p>
                          fact that a reader will be distracted by the readable content of a page when looking at its layout.
                          The
                          point of using
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 ">
                    <div class="box ">
                      <div class="img-box">
                        <img src="images/cat4.png" alt="">
                      </div>
                      <div class="detail-box">
                        <h5>
                          Biography
                        </h5>
                        <p>
                          fact that a reader will be distracted by the readable content of a page when looking at its layout.
                          The
                          point of using
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 ">
                    <div class="box ">
                      <div class="img-box">
                        <img src="images/cat5.png" alt="">
                      </div>
                      <div class="detail-box">
                        <h5>
                          Adventure
                        </h5>
                        <p>
                          fact that a reader will be distracted by the readable content of a page when looking at its layout.
                          The
                          point of using
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 ">
                    <div class="box ">
                      <div class="img-box">
                        <img src="images/cat6.png" alt="">
                      </div>
                      <div class="detail-box">
                        <h5>
                          Fantasy
                        </h5>
                        <p>
                          fact that a reader will be distracted by the readable content of a page when looking at its layout.
                          The
                          point of using
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        
          <!-- end catagory section -->
        
          <!-- about section -->
        
          <section class="about_section layout_padding">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/about-img.png" alt="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="detail-box">
                    <div class="heading_container">
                      <h2>
                        About Our Bookstore
                      </h2>
                    </div>
                    <p>
                      At cumque tenetur iste molestiae, vel eum reiciendis assumenda! Numquam, repudiandae. Consequuntur obcaecati recusandae aliquam, amet doloribus eius dolores officiis cumque? Quibusdam praesentium pariatur sapiente mollitia, amet hic iusto voluptas! Iusto quo earum vitae excepturi, ipsam aliquid deleniti assumenda culpa deserunt.
                    </p>
                    <a href="">
                      Read More
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </section>
        
          <!-- end about section -->
        
          <!-- client section -->
        
          <section class="client_section layout_padding">
            <div class="container ">
              <div class="heading_container heading_center">
                <h2>
                  What Says Customers
                </h2>
                <hr>
              </div>
              <div class="row">
                <div class="col-md-6 mx-auto">
                  <div class="client_container ">
                    <div class="detail-box">
                      <p>
                        Editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by
                      </p>
                      <span>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </span>
                    </div>
                    <div class="client_id">
                      <div class="img-box">
                        <img src="images/c1.jpg" alt="">
                      </div>
                      <div class="client_name">
                        <h5>
                          Jone Mark
                        </h5>
                        <h6>
                          Student
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mx-auto">
                  <div class="client_container ">
                    <div class="detail-box">
                      <p>
                        Editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by
                      </p>
                      <span>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </span>
                    </div>
                    <div class="client_id">
                      <div class="img-box">
                        <img src="images/c2.jpg" alt="">
                      </div>
                      <div class="client_name">
                        <h5>
                          Anna Crowe
                        </h5>
                        <h6>
                          Student
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 mx-auto">
                  <div class="client_container ">
                    <div class="detail-box">
                      <p>
                        Editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by
                      </p>
                      <span>
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                      </span>
                    </div>
                    <div class="client_id">
                      <div class="img-box">
                        <img src="images/c3.jpg" alt="">
                      </div>
                      <div class="client_name">
                        <h5>
                          Hilley James
                        </h5>
                        <h6>
                          Student
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        
          <!-- end client section -->

          <!-- info section -->
        
          <section class="info_section layout_padding2">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-lg-4 info-col">
                  <div class="info_detail">
                    <h4>
                      About Us
                    </h4>
                    <p>
                      Vitae aut explicabo fugit facere alias distinctio, exem commodi mollitia minusem dignissimos atque asperiores incidunt vel voluptate iste
                    </p>
                    <div class="info_social">
                      <a href="">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                      <a href="">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                      <a href="">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                      </a>
                      <a href="">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 info-col">
                  <div class="info_contact">
                    <h4>
                      Address
                    </h4>
                    <div class="contact_link_box">
                      <a href="">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>
                          Mirpur, Dhaka
                        </span>
                      </a>
                      <a href="">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>
                          Call +880 1759560627
                        </span>
                      </a>
                      <a href="">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>
                          team@kagoz.com
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 info-col">
                  <div class="map_container">
                    <div class="map">
                      <div id="googleMap"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        
          <!-- end info section -->
        
          <!-- footer section -->
          <footer class="footer_section">
            <div class="container">
              <p>
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="#">KagoZ LLC</a>
              </p>
            </div>
          </footer>
          <!-- footer section -->


            <!-- jQery -->
            <script src="js/bostorek/jquery-3.4.1.min.js"></script>
            <!-- bootstrap js -->
            <script src="js/bostorek/bootstrap.js"></script>
            <!-- custom js -->
            <script src="js/bostorek/custom.js"></script>
            <!-- Google Map -->
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
            </script>
            <!-- End Google Map -->

    </body>
</html>
