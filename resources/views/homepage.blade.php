<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

    <!-- Importing font from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/home.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Navbar section -->
    <div class="container-fluid full-navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- Logo and Toggle Button -->
            <a class="navbar-brand" href="#"> MediSeduler </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="d-flex w-100 flex-column flex-lg-row justify-content-between">
                    <div class="d-flex flex-column flex-lg-row justify-content-start align-items-lg-center mx-lg-auto">
                        <a class="nav-link nav-center text-muted" href="#">Home</a>
                        <a class="nav-link nav-center text-muted" href="#about-us">About Us</a>
                        <a class="nav-link nav-center text-muted" href="#">Services</a>

                        <div class="nav-item dropdown">
                            <a class="nav-link nav-center text-muted" href="#" id="appointmentMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Appointment </a>
                            <ul class="dropdown-menu border-0 bg-dark" aria-labelledby="appointmentMenuLink">
                                <li><a class="dropdown-item" href="#">Check Appointment</a></li>
                                <li><a class="dropdown-item" href="#">Make Appointment</a></li>
                            </ul>
                        </div>
                        <!-- <a class="nav-link nav-center text-muted" href="#">Appointment</a> -->
                        <a class="nav-link nav-center text-muted" href="#">Contact</a>
                    </div>

                    

                    <div class="d-flex flex-row justify-content-center align-items-center gap-2 gap-lg-3">
                        <a class="nav-link text-muted" href="tel:+8801735791960">(+880) 1735 791960</a>
                        <a class="nav-link text-muted" href="{{ route('login') }}">Login/Register</a>
                        <a class="btn btn-sm appointment-btn-1" href="#">Appointment</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- Home section -->
    <div id="hero">
        <div class="hero-heading-box">
            <h1 class="hero-heading text-center text-lg-start pt-3">Trust in Experience</h1>
            <h2 class="hero-heading text-center text-lg-start pb-3">Care in Every Step</h2>
        </div>
        <p id="hero-paragraph">
            We provide exceptional eye care tailored to your needs, from thorough exams to advanced treatments, ensuring your long-term vision health with trusted, professional care.
        </p>
        <div class="d-flex justify-content-center justify-content-lg-start">
            <a class="btn btn-success appointment-btn-2" href="#">Book An Appointment</a>
        </div>
    </div>
    
    <!-- About Us section -->
    <div class="container" id="about-us">
        <div class="row d-flex align-items-center about-row">
            <div class="col-12 col-lg-6 mb-4 mb-lg-0  d-flex flex-column justify-content-center">
                <div class="mb-3">
                    <video id="mainVideo" controls>
                        <source src="{{ asset('assets/video/care-video-1.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                
                <div class="d-flex justify-content-center flex-wrap gap-1">
                    <img src="{{ asset('assets/video/thumb/care-video-1-thumb.png') }}" class="video-thumb" data-video="{{ asset('assets/video/care-video-1.mp4') }}" alt="Video 1">
                    <img src="{{ asset('assets/video/thumb/care-video-2-thumb.png') }}" class="video-thumb" data-video="{{ asset('assets/video/care-video-2.mp4') }}" alt="Video 2">
                    <img src="{{ asset('assets/video/thumb/care-video-3-thumb.png') }}" class="video-thumb" data-video="{{ asset('assets/video/care-video-3.mp4') }}" alt="Video 3">
                </div>
            </div>
            
            <div class="col-12 col-lg-6 ps-lg-5 align-self-start">
                <h2 class="about-title text-center">About Us</h2>
                <p class="about-text">
                    Your eyes deserve the best care — and we are here to provide it with expertise and compassion. From routine check-ups to advanced treatments for cataracts, glaucoma, and retinal disorders, every step of our care is designed to protect and improve your vision. With cutting-edge technology and personalized attention, we deliver accurate diagnosis, safe procedures, and lasting results. Our mission is simple yet powerful: to help you see the world more clearly, confidently, and with healthy eyes for life.
                </p>
            </div>
        </div>
    </div>
    <!-- Services section -->
    <!-- Check Appointment section -->
    <!-- Contact section -->

    <!-- jQuery CDN (placed before closing body tag) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS (without Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script>
        $(document).ready(function() {
            const video = $('#mainVideo');
            const videoElemnent = video.get(0);

            $(".video-thumb").on('click', function(e) {
                e.preventDefault();

                const newSource = $(this).data('video');
                if(!newSource) return;

                videoElemnent.pause();
                videoElemnent.src = newSource;
                videoElemnent.load();
                videoElemnent.play();

                thumbs.removeClass('is-acive');
                $(this).addClass('is-acive');
            })
        });
    </script>
</body>
</html>