@extends('layouts.welcome')
@section('content')
<!-- Hero Section -->
<section class="hero">
        <div class="hero-content">
            <h2>Welcome to Belizario Medical Clinic</h2>
            <p class="lead">Your health & wellness are our priorities. Book your appointment today.</p>
            <a href="{{url('/register')}}" class="btn">Get Started</a>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services-section" class="services-section">
        <h2>Services Offered</h2>
        <div class="services-grid">
            <div class="service-item">
                <i class="fas fa-stethoscope fa-3x" aria-hidden="true"></i>
                <h3>Medical Consultation</h3>
                <p>Medical consultations to assess your health and well-being.</p>
            </div>
            <div class="service-item">
                <i class="fas fa-file-medical fa-3x" aria-hidden="true"></i>
                <h3>Medical Certification</h3>
                <p>Medical certification for work, school, or other requirements.</p>
            </div>
            <div class="service-item">
                <i class="fas fa-prescription-bottle-alt fa-3x" aria-hidden="true"></i>
                <h3>Prescriptions</h3>
                <p>Prescriptions for new, ongoing treatment and maintenance medication.</p>
            </div>
            <div class="service-item">
                <i class="fas fa-vials fa-3x" aria-hidden="true"></i>
                <h3>Laboratory Requests and Results Interpretation</h3>
                <p>Requests for laboratory test and interpretation of laboratory results.</p>
            </div>
        </div>
    </section>
    <!-- About Section -->
<section id="about-section" class="about-section">
    <div class="container">
        <h2>About Us</h2>
        <div class="about-content">
            <div class="about-text">
                <h3>Welcome to Belizario Medical Clinic</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque, quae enim nesciunt odit vel voluptate voluptates maxime tempora tempore veniam suscipit sequi earum. Id ea dolor earum dolore dicta accusamus.
                </p>
                <p>
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda nemo eum odit eaque possimus quibusdam sequi inventore accusamus dolorum, sapiente nulla fuga aut quaerat illo aliquam nihil delectus alias ipsa?                </p>
                <h3>Mission</h3>
                <p>
                    To provide high-quality, accessible, and compassionate healthcare services that improve the health and lives of our community members.
                </p>
                <h3>Vision</h3>
                <p>
                    To be the leading medical clinic recognized for excellence in patient care and community wellness.
                </p>
            </div>
            <div class="about-image">
                <img src="{{asset('img/about.png')}}" alt="Belizario Medical Clinic">
            </div>
        </div>
        <div class="location-contact-section">
            <div class="location">
                <h3>Location</h3>
                <p>A. Gonzales, Biñan Laguna</p>
                <!-- Google Maps Embed -->
                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193572.1326936956!2d121.022366!3d14.444480!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c8e0c9c9b0bd%3A0x1234567890abcdef!2sA.%20Gonzales%2C%20Bi%C3%B1an%2C%20Laguna!5e0!3m2!1sen!2sph!4v1665075678901!5m2!1sen!2sph" 
                        width="100%" 
                        height="300" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
            <div class="contact-details">
                <h3>Contact Us</h3>
                <p><i class="fas fa-phone-alt"></i> <a href="tel:09942633578">0994 263 3578</a></p>
                <p><i class="fas fa-envelope"></i> <a href="mailto:belizariomedical@gmail.com">belizariomedical@gmail.com</a></p>
                <p><i class="fab fa-facebook-f"></i> <a href="https://web.facebook.com/profile.php?id=100093309222261" target="_blank" rel="noopener noreferrer">Facebook</a></p>
            </div>
        </div>
        <button id="back-to-top" class="btn btn-primary btn-sm"><i class="fas fa-chevron-up"></i></button>
    </div>
</section>
@endsection