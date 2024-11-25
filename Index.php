<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400&family=Raleway:wght@500&family=Ephesis&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="Assets/CSS/Style.css" />

    <link rel="shortcut icon" href="Assets/Images/Logo.png" type="image/x-icon" />

    <!-- bootstrap Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
    <title>Radiant Memories</title>
  </head>
  <body>
    <!-- Navigation bar start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent shadow-sm fixed-top">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav w-100 d-flex justify-content-between">
            <li class="nav-item active"><a class="nav-link" href="Index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="About.php">About</a></li>
            <li class="nav-item"><a class="nav-link" style="margin-right: 60px" href="Services.php">Services</a></li>
          </ul>
          <a class="navbar-brand mx-auto" href="Index.php">
            <img src="Assets/Images/Logo.png" width="150" height="100" class="d-inline-block align-top" alt="Logo" loading="lazy" />
          </a>
          <ul class="navbar-nav w-100 d-flex justify-content-between">
            <li class="nav-item"><a class="nav-link" href="Portfolio.php">Portfolio</a></li>
            <li class="nav-item"><a class="nav-link" href="Gallery.php">Gallery</a></li>
            <li class="nav-item"><a class="nav-link" href="Contact.php">Contact</a></li>
            <button class="btn btn-outline-info" type="submit"><a href="Login.php">Login</a></button>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navigation bar end -->

    <!-- Carousel start -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Assets/Images/Slide image 1.avif" class="d-block w-100" alt="Memories" />
          <div class="carousel-caption d-none d-md-block">
            <h3>Radiant Memories</h3>
            <p>Capturing Happiness</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Assets/Images/Slide image 2.avif" class="d-block w-100" alt="Memories" />
          <div class="carousel-caption d-none d-md-block">
            <h3>Radiant Memories</h3>
            <p>Capturing Happiness</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Assets/Images/Slide image 3.jpg" class="d-block w-100" alt="Memories" />
          <div class="carousel-caption d-none d-md-block">
            <h3>Radiant Memories</h3>
            <p>Capturing Happiness</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
    <!-- Carousel end -->

    <!-- creative text start -->
    <div class="jumbotron1 text-center my-5">
      <img src="Assets/Images/Camera.webp" alt="Award Winning Photography" class="award-image" />
      <h2>AWARD WINNING PHOTOGRAPHY</h2>
      <p class="lead">Showcasing your big day in a memorable and unforgettable way.</p>
    </div>
    <!-- creative text end -->

    <!-- About Us start -->
    <div class="jumbotron">
      <div class="container my-5">
        <div class="row align-items-center">
          <div class="col-md-6">
            <img src="Assets/Images/About.avif" style="height: 700px" alt="Team Radiant Memories" class="img-fluid rounded" />
          </div>
          <div class="col-md-6">
            <p class="about-comma">“</p>
            <h2 class="about-title">Hello, We are Team Radiant Memories</h2>
            <p class="about-description" style="text-align: justify">
              Welcome to Radiant Memories! We are a passionate team of dedicated photographers and skilled editors who have been capturing life's beautiful moments since our early years. With a keen
              eye for detail and a deep love for the art of photography, we established our studio two years ago to turn our vision into reality. Our team consists of talented photographers and a
              creative editor, working together to bring your stories to life with stunning images that you’ll cherish forever. At Radiant Memories, we don’t just take pictures — we capture emotions,
              memories, and experiences.
            </p>
            <p class="signature">Alex GBE</p>
            <a href="About.php"><button class="btn btn-primary">Learn More</button></a>
          </div>
        </div>
      </div>
    </div>
    <!-- About Us end -->

    <!-- Services start -->
    <div class="container text-center my-5">
      <h2 class="services-title">SERVICES</h2>
      <h1 class="display-4 what-we-offer">What We Offer</h1>
      <div class="row">
        <div class="col-md-4">
          <div class="service-card">
          <img src="Assets/Images/Service 1.avif" alt="Wedding Image" width="300" height="200">
            <h3 class="service-title">Wedding</h3>
            <p class="service-desc">Photo and Video</p>
            <p class="service-price">Nrs.29,999</p>
            <a href="Services.php" class="btn btn-outline-secondary">Book Now</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card">
          <img src="Assets/Images/Service 2.avif" alt="Wedding Image" width="300" height="200">
            <h3 class="service-title">Portrait</h3>
            <p class="service-desc">Model Photoshoot</p>
            <p class="service-price">Nrs.4,999</p>
            <a href="Services.php" class="btn btn-outline-secondary">Book Now</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card">
          <img src="Assets/Images/Service 3.avif" alt="Wedding Image" width="300" height="200">
            <h3 class="service-title">Event</h3>
            <p class="service-desc">Photo and Video</p>
            <p class="service-price">Nrs.19,999</p>
            <a href="Services.php" class="btn btn-outline-secondary">Book Now</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Services end -->
    
  </body>
</html>
