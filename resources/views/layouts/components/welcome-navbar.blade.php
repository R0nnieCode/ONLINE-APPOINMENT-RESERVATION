 <!-- Navigation Bar -->
   <nav class="navbar navbar-expand-lg navbar-light floating-nav text-white">
        <a class="navbar-brand" href="{{url('/')}}">
             <h1 class="text-white">Belizario Medical Clinic</h1>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white large-font" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white large-font" href="#services-section">Services</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-white large-font dropdown-toggle" href="#" id="appointmentsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Appointments
                    </a>
                    <div class="dropdown-menu" aria-labelledby="appointmentsDropdown">
                        <a class="dropdown-item" href="client/login.php">Clinic Visit</a>
                        <a class="dropdown-item" href="client/login.php">Online Consult</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white large-font" href="#about-section">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white large-font" href="{{url('/login')}}">Login</a>
                </li>
            </ul>
        </div>
    </nav>