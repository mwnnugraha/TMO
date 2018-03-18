@php
$komponen=App\Komponen::find(1);
$fasilitas=App\Fasilitas::all();
$kerjasama=App\Perusahaan::all();
$prestasi=App\prestasi::all();
$alumni=App\alumni::all();
@endphp
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Parallax, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Teknik Kendaraan Ringan</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('mate/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('mate/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('mate/css/line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('mate/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('mate/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('mate/css/nivo-lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('mate/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('mate/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('mate/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('mate/css/main.css')}}">    
    <link rel="stylesheet" href="{{asset('mate/css/responsive.css')}}">

  </head>
  <body>




    <!-- Header Section Start -->
    <header id="hero-area" data-stellar-background-ratio="0.5">    
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <a href="index.html" class="navbar-brand"><img class="img-fulid" src="{{asset('img/logo-1.png')}}" alt="" style="height: 50px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <i class="lnr lnr-menu"></i>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#hero-area">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#services">Profil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#features">Kurikulum</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#prestasi">Prestasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#portfolios">Fasilitas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#team">Kerja Sama</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#testimonial">Testimoni</a>
              </li>
            </ul>
          </div>
        </div>




        <!-- Mobile Menu Start -->
        <ul class="mobile-menu">
           <li>
              <a class="page-scroll" href="#hero-area">Home</a>
            </li>
            <li>
              <a class="page-scroll" href="#services">Services</a>
            </li>
            <li>
              <a class="page-scroll" href="#features">Features</a>
            </li>
            <li>
              <a class="page-scroll" href="#portfolios">Works</a>
            </li>
            <li>
              <a class="page-scroll" href="#pricing">Pricing</a>
            </li>
            <li>
              <a class="page-scroll" href="#team">Team</a>
            </li>
            <li >
              <a class="page-scroll" href="#blog">Blog</a>
            </li>
            <li>
              <a class="page-scroll" href="#contact">Contact</a>
            </li>
        </ul>
        <!-- Mobile Menu End -->




      </nav>
      <!-- Navbar End -->   
      <div class="container">      
        <div class="row justify-content-md-center">
          <div class="col-md-10">
            <div class="contents text-center">
              <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">Teknik Kendaraan Ringan</h1>
              <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">SMK ASSALAAM BANDUNG</p>
            </div>
          </div>
        </div> 
      </div>           
    </header>
    <!-- Header Section End --> 





    <!-- Services Section Start -->
    <section id="services" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Profil TKR</h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s"><br>
          <h1><img src="{{asset('img/'.$komponen->logo)}}" style="height: 100px  width: 100px">
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">{{$komponen->profil}} </p>
        </div>
        <p></p>
        
      </div>
    </section>
    <!-- Services Section End -->




    <!-- Features Section Start -->
    <section id="features" class="section" data-stellar-background-ratio="0.2">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Kurikulum</h2>
          <div class="testimonial-item">
                <img src="{{asset('img/'.$komponen->foto_kaprog)}}" alt="Client Testimonoal" 
                style="height: 250px; width: 250px" />
                <div class="testimonial-text">
                <div class="social-icons">
                  <h3>{{$komponen->nama_kaprog}}</h3>
                  <span>{{$komponen->jabatan_kaprog}}</span><br><br>
                    <div class="social-icons">  
                  <ul>
                    <li class="facebook"><a href="https://www.facebook.com/smkassalaam/"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter"><a href="https://twitter.com/smkassalaam/"><i class="fa fa-twitter"></i></a></li>
                    <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                  </div>
                  <h3>{{$komponen->target_kurikulum}}</h4>
                </div>
          </div>
        <div/>
      </div>
    </section>
    <!-- Features Section End -->




    <section id="prestasi" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Prestasi</h2>
          <p class="section-subtitle">
        </div>
        <div class="row">          
            <div class="col-md-12">
        </div>
          <!-- Portfolio Recent Projects -->
          <div id="prestasi" class="row">
            @foreach($prestasi as $data)
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development print">
              <div class="prestasi-item">
                <div class="shot-item">
                <img src="{{asset('image/'.$data->gambar)}}" alt="" style="height: 50px width: 50px"> 
                  <a class="overlay lightbox" href="{{asset('image/'.$data->gambar)}}">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                 <center> <p>{{$data->judul}}</p></center>
                </div>               
              </div>
            </div>
             @endforeach
            </div>
          </div>
        </div>
      </div>
      <!-- Container Ends -->
    </section>    






    <!-- Portfolio Section -->
    <section id="portfolios" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Fasilitas</h2>
          <p class="section-subtitle">
        </div>
          <div class="row">          
            <div class="col-md-12">
          </div>
          <!-- Portfolio Recent Projects -->
          <div id="portfolio" class="row">
            @foreach($fasilitas as $data)
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development print">
              <div class="portfolio-item">
                <div class="shot-item">
                <img src="{{asset('image/'.$data->gambar)}}" alt="" style="height: 50px width: 50px">
                  <a class="overlay lightbox" href="{{asset('image/'.$data->gambar)}}">
                    <i class="lnr lnr-eye item-icon"></i>
                  </a>
                 <center> <p>{{$data->nama}}</p></center>
                </div>               
              </div>
            </div>
             @endforeach
            </div>
          </div>
        </div>
      </div>
      <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends --> 






    <!-- Team section Start -->
    <section id="team" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Kerja Sama</h2>
          <p class="section-subtitle">
          </div>
        <div class="row">
          @foreach($kerjasama as $data)
        <img src="{{asset('image/'.$data->logo)}}" alt="" style="height: 150px width: 150px" />
         @endforeach
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- Team section End -->




    <!-- testimonial Section Start -->
    <div id="testimonial" class="section" data-stellar-background-ratio="0.1">
      <div class="container">
       <center> <h4>Testimoni Alumni</h4></center><br>
        <div class="row justify-content-md-center">
          <div class="col-md-12">
            <div class="touch-slider owl-carousel owl-theme">
            @foreach ($alumni as $data)
              <div class="testimonial-item">
                <img src="{{asset('image/'.$data->foto)}}" alt="Client Testimonoal"  style="height: 300px; width: 250px"/>
                <div class="testimonial-text">
                  <p>{!!$data->testimoni!!}</p>
                  <h3>{!!$data->nama!!}</h3>
                  
                </div>
              </div>
            @endforeach
            </div>
          </div>
        </div>        
      </div>
    </div>
    



      
    <!-- testimonial Section Start -->

    <!-- Contact Section Start -->
    <section class="pege-section cta"><center>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.367365297508!2d107.59072401449804!3d-6.965916594967511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8deccecb6f1%3A0x658cc60fbe5017b9!2sSMK+Assalaam+Bandung!5e0!3m2!1sid!2sid!4v1521346970309" width="1000" height="700" frameborder="0" style="border:0" allowfullscreen></iframe></center>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Start -->
    <footer>          
      <div class="container">
        <div class="row">
          <!-- Footer Links -->
          <div class="col-lg-6 col-sm-6 col-xs-12">
            <ul class="footer-links">
          </div>
          <div class="col-lg-6 col-sm-6 col-xs-12">
            <div class="copyright">
            <img src="{{asset('img/logo-1.png')}}" style="height: 50px">
              <p>Teknik kendaraan Ringan <a rel="nofollow" href="https://uideck.com"></a></p>
            </div>
          </div>  
        </div>
      </div>
    </footer>
    <!-- Footer Section End --> 

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lnr lnr-arrow-up"></i>
    </a>
    
    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>  

    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5aabe185d7591465c708a192/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->   

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="{{asset('mate/js/jquery-min.js')}}"></script>
    <script src="{{asset('mate/js/popper.min.js')}}"></script>
    <script src="{{asset('mate/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('mate/js/jquery.mixitup.js')}}"></script>
    <script src="{{asset('mate/js/nivo-lightbox.js')}}"></script>
    <script src="{{asset('mate/js/owl.carousel.js')}}"></script>    
    <script src="{{asset('mate/js/jquery.stellar.min.js')}}"></script>    
    <script src="{{asset('mate/js/jquery.nav.js')}}"></script>    
    <script src="{{asset('mate/js/scrolling-nav.js')}}"></script>    
    <script src="{{asset('mate/js/jquery.easing.min.js')}}"></script>    
    <script src="{{asset('mate/js/smoothscroll.js')}}"></script>    
    <script src="{{asset('mate/js/jquery.slicknav.js')}}"></script>     
    <script src="{{asset('mate/js/wow.js')}}"></script>   
    <script src="{{asset('mate/js/jquery.vide.js')}}"></script>
    <script src="{{asset('mate/js/jquery.counterup.min.js')}}"></script>    
    <script src="{{asset('mate/js/jquery.magnific-popup.min.js')}}"></script>    
    <script src="{{asset('mate/js/waypoints.min.js')}}"></script>    
    <script src="{{asset('mate/js/form-validator.min.js')}}"></script>
    <script src="{{asset('mate/js/contact-form-script.js')}}"></script>   
    <script src="{{asset('mate/js/main.js')}}"></script>

  </body>
</html>