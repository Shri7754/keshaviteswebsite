 <!-- Navbar & Carousel Start -->
 <div class="container-fluid position-relative p-0">
     <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
         <a href="{{ url('/') }}" class="navbar-brand logo-wrap">
             <img src="{{ assetImage('keshaviteslogo.png') }}" alt="Keshav Ites - Software Development Company">
         </a>

         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
             <span class="fa fa-bars"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarCollapse">
             <div class="navbar-nav ms-auto py-0">
                 <a href="/" class="nav-item nav-link active">Home</a>
                 <a href="/about" class="nav-item nav-link">About Us</a>
                 <a href="/services" class="nav-item nav-link">Services</a>
                 <div class="nav-item dropdown">
                     <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Solutions</a>
                     <div class="dropdown-menu m-0">
                         <a href="{{ route('pulse-clinic.project') }}" class="dropdown-item">Web Development</a>
                         <a href="{{ route('mobile-applications') }}" class="dropdown-item">Mobile Applications</a>
                     </div>
                 </div>
                 <a href="/contact" class="nav-item nav-link">Contact</a>
             </div>
             <button type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal">
                 <i class="fa fa-search"></i>
             </button>
         </div>
     </nav>

     <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
         <div class="carousel-inner">
             <div class="carousel-item active">
                 <img class="w-100" src="{{ assetImage('carousel-1.jpg') }}"
                     alt="Professional IT Solutions and Software Development">
                 <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                     <div class="p-3" style="max-width: 900px;">
                         <h5 class="text-white text-uppercase mb-3 animated slideInDown">Expert IT Solutions</h5>
                         <h1 class="display-1 text-white mb-md-4 animated zoomIn">Innovative Software Solutions for Your
                             Business Growth</h1>
                         <a href="/contact" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Get Free
                             Consultation</a>
                         <a href="/services" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">View
                             Services</a>
                     </div>
                 </div>
             </div>
             <div class="carousel-item">
                 <img class="w-100" src="{{ assetImage('carousel-2.jpg') }}"
                     alt="Custom Software Development Services">
                 <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                     <div class="p-3" style="max-width: 900px;">
                         <h5 class="text-white text-uppercase mb-3 animated slideInDown">Trusted Technology Partners
                         </h5>
                         <h1 class="display-1 text-white mb-md-4 animated zoomIn">Scalable & Secure Software Solutions
                         </h1>
                         <a href="/contact" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Schedule a
                             Demo</a>
                         <a href="/about" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Learn
                             More</a>
                     </div>
                 </div>
             </div>
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Next</span>
         </button>
     </div>
 </div>
 <!-- Navbar & Carousel End -->
