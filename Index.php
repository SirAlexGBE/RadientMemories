<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="description"
      content="Discover Radiant Memories, your premier photography center in Kathmandu, Nepal. We specialize in capturing life's precious moments—weddings, portraits, events, and more—with stunning clarity and artistry. Book your session today and preserve your memories beautifully!"
    />
    <meta
      name="keywords"
      content="photography center Kathmandu, wedding photography Nepal, event photography Kathmandu, portrait photography Nepal, professional photographer Kathmandu, Radiant Memories"
    />
    <meta name="author" content="Alex Kandel" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="Assets/CSS/Style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400&family=Raleway:wght@400;500;600&family=Ephesis&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="Assets/Images/Logo.png" type="image/x-icon" />

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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
            <li class="nav-item"><a class="nav-link" href="Index.php">Home</a></li>
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
      <script>
        // JavaScript to add the active class based on the current page URL
        document.addEventListener("DOMContentLoaded", function () {
          var path = window.location.pathname.split("/").pop();
          var target = document.querySelectorAll('.nav-link[href="' + path + '"]');

          target.forEach(function (link) {
            link.classList.add("active");
          });
        });
      </script>
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
          <img src="Assets/Images/Slide image 3.jpeg" class="d-block w-100" alt="Memories" />
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
            <img src="Assets/Images/Service 1.avif" alt="Wedding Image" width="300" height="200" style="border: 1px solid #ccc; border-radius: 10px" />
            <h3 class="service-title">Wedding</h3>
            <p class="service-desc">Photo and Video</p>
            <p class="service-price">Nrs.29,999</p>
            <a href="Services.php" class="btn btn-outline-secondary">Book Now</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card">
            <img src="Assets/Images/Service 2.avif" alt="Wedding Image" width="300" height="200" style="border: 1px solid #ccc; border-radius: 10px" />
            <h3 class="service-title">Portrait</h3>
            <p class="service-desc">Model Photoshoot</p>
            <p class="service-price">Nrs.4,999</p>
            <a href="Services.php" class="btn btn-outline-secondary">Book Now</a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card">
            <img src="Assets/Images/Service 3.avif" alt="Wedding Image" width="300" height="200" style="border: 1px solid #ccc; border-radius: 10px" />
            <h3 class="service-title">Event</h3>
            <p class="service-desc">Photo and Video</p>
            <p class="service-price">Nrs.19,999</p>
            <a href="Services.php" class="btn btn-outline-secondary">Book Now</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Services end -->
    <!-- portfolio start -->
    <div class="jumbotron">
      <h2 class="portfolio-title">PORTFOLIO</h2>
      <h1 class="display-3 text-center featured-story">Featured Story</h1>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2 class="portfolio-number">01</h2>
            <h4 class="portfolio-name">Ankit and Priyanka</h4>
            <p class="portfolio-desc">"Capturing love stories, one moment at a time. Explore the joy and emotion of this beautiful couple's wedding day, preserved with care by Radiant Memories.".</p>
          </div>
          <div class="col-md-8">
            <img src="Assets/Images/Portfolio 1.avif" alt="Wedding Image" height=" 470px" ; style="border: 1px solid #ccc; border-radius: 10px" />
            <img src="Assets/Images/Portfolio 2.avif" alt="Wedding Image" height=" 470px" ; style="border: 1px solid #ccc; border-radius: 10px" />
          </div>
        </div>
        <a href="Portfolio.php" class="btn btn-outline-info my-5" style="margin-left: 900px; font-size: large; font-family: 'Cormorant Garamond'">View Gallery</a>
      </div>
    </div>
    <!-- portfolio end -->
    <!-- testimonial start -->
    <div class="container my-5">
      <h2 class="testimonial-title">Client Testimonials</h2>
      <div id="testimonialCarousel" class="carousel slide testimonial-section" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-6">
                <p class="testimonial-comma">“</p>
                <p class="testimonial-text">Showcasing your Big Day in a Memorable & Unforgettable way.</p>
                <p class="testimonial-author">Sumina & Sudeep</p>
              </div>
              <div class="col-md-6">
                <img src="Assets/Images/testimonial 1.avif" class="img-fluid" style="height: 400px; width: 400px" alt="Couple Image" />
              </div>
            </div>
          </div>
          <!-- First new testimonial -->
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-6">
                <p class="testimonial-comma">“</p>
                <p class="testimonial-text">The service was beyond our expectations. Thank you!</p>
                <p class="testimonial-author">Mira & Raj</p>
              </div>
              <div class="col-md-6">
                <img src="Assets/Images/testimonial 2.avif" class="img-fluid" style="height: 400px; width: 400px" alt="Couple Image" />
              </div>
            </div>
          </div>
          <!-- Second new testimonial -->
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-6">
                <p class="testimonial-comma">“</p>
                <p class="testimonial-text">A truly unforgettable experience. Highly recommended!</p>
                <p class="testimonial-author">Kiran & Sunita</p>
              </div>
              <div class="col-md-6">
                <img src="Assets/Images/testimonial 3.avif" class="img-fluid" style="height: 400px; width: 400px" alt="Couple Image" />
              </div>
            </div>
          </div>
          <!-- Add more carousel items here if needed -->
        </div>
        <a class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
    </div>
    <!-- testimonial end -->
    <!-- Experirnce start -->
    <div class="jumbotron">
      <h1 class="display-3" style="font-family: 'Cormorant Garamond', serif; font-size: 40px; line-height: 48px; text-align: center; letter-spacing: 0.05em; color: #000000">
        Helping You Capture Your Best Moments
      </h1>
      <div class="experience-container">
        <div>
          <p class="experience-number">2</p>
          <p class="experience-label">Years Experience</p>
        </div>
        <div>
          <p class="experience-number">4K</p>
          <p class="experience-label">Photos Delivered</p>
        </div>
        <div>
          <p class="experience-number">30</p>
          <p class="experience-label">Events Captured</p>
        </div>
        <div>
          <p class="experience-number">3</p>
          <p class="experience-label">Awards</p>
        </div>
      </div>
    </div>
    <!-- Experirnce end -->
    <!-- contact start -->
    <div class="container my-5">
      <h4 class="contact-title" style="font-family: 'Raleway'; font-weight: 500; font-size: 28px; color: #bba085; letter-spacing: 0.2em">CONTACT</h4>
      <div class="row">
        <div class="col-md-6">
          <h2 style="font-family: 'Cormorant Garamond'; font-weight: 400; font-size: 30px; line-height: 78px; text-align: center; letter-spacing: 0.05em; color: #5b5b5b">Get in Touch</h2>

          <form>
            <div class="form-group" style="margin-top: 20px">
              <label for="name" style="font-family: 'Cormorant Garamond'; font-weight: 300; font-size: 28px; color: #2d2d2d">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your name" />
            </div>
            <div class="form-group" style="margin-top: 20px">
              <label for="email" style="font-family: 'Cormorant Garamond'; font-weight: 300; font-size: 28px; color: #2d2d2d">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your email" />
            </div>
            <div class="form-group" style="margin-top: 20px">
              <label for="message" style="font-family: 'Cormorant Garamond'; font-weight: 300; font-size: 28px; color: #2d2d2d">Message</label>
              <textarea class="form-control" id="message" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-outline-info" style="margin-top: 10px; font-family: 'Cormorant Garamond'; font-style: normal; font-weight: 400; font-size: 28px; color: #505050">
              Send
            </button>
          </form>
        </div>
        <div class="col-md-6">
          <img src="Assets/Images/contact.avif" class="img-fluid" alt="Contact Image" style="width: 90%; height: 600px" />
        </div>
      </div>
    </div>

    <!-- contact end -->
    <!-- Footer Start -->

    <div class="container-fluid" style="background: #e1edf8; padding: 20px 0; margin-top: 20px">
      <div class="row">
        <!-- Contact Us -->
        <div class="col-md-4" style="text-align: center">
          <h4>Contact Us</h4>

          <p>
            <i class="fa fa-camera"></i>
            Radiant Memories
          </p>
          <p>
            <i class="fa fa-map-marker"></i>
            Raniban, Kathmandu
          </p>
          <p>
            <i class="fa fa-envelope"></i>
            info.Radiantmemories@gmail.com
          </p>
          <p>
            <i class="fa fa-phone"></i>
            +977 9812345678
          </p>
        </div>
        <!-- Logo and Social Links -->
        <div class="col-md-4" style="text-align: center">
          <img src="Assets/Images/Logo.png" alt="Logo" style="width: 200px; height: auto; display: block; margin: 0 auto" />
          <div>
            <a href="https://www.facebook.com" target="_blank" style="font-size: 30px; margin-right: 10px; color: #3b5998"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com" target="_blank" style="font-size: 30px; margin-right: 10px; color: #e1306c"><i class="fa fa-instagram"></i></a>
            <a href="https://www.twitter.com" target="_blank" style="font-size: 30px; margin-right: 10px; color: #1da1f2"><i class="fa fa-twitter"></i></a>
            <a href="https://www.whatsapp.com" target="_blank" style="font-size: 30px; margin-right: 10px; color: #25d366"><i class="fa fa-whatsapp"></i></a>
            <a href="https://www.youtube.com" target="_blank" style="font-size: 30px; margin-right: 10px; color: #ff0000"><i class="fa fa-youtube"></i></a>
            <a href="https://www.linkedin.com" target="_blank" style="font-size: 30px; margin-right: 10px; color: #0077b5"><i class="fa fa-linkedin"></i></a>
          </div>
        </div>
        <!-- Google Maps -->
        <div class="col-md-4" style="text-align: center">
          <h4>Locate Us</h4>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14019.299145441686!2d77.10994291827024!3d28.544985752527197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1c3f7679573f%3A0xa6cf20e5f7741834!2sRadiant%20Photographer!5e0!3m2!1sen!2snp!4v1732616250907!5m2!1sen!2snp"
            width="300"
            height="250"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
      <div class="row" style="text-align: center">
        <div class="col-12">
          <p style="font-family: 'Cormorant Garamond'; color: #2d2d2d">&copy; 2024 All Rights Reserved by Radiant Memories</p>
        </div>
      </div>
    </div>
    <!-- Footer End -->
  </body>
</html>
