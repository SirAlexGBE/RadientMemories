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

    <!-- contact start -->

    <div class="container my-5" style="padding: 10px">
      <h4 class="contact-title" style="font-family: 'Raleway'; font-weight: 500; font-size: 28px; color: #bba085; letter-spacing: 0.2em">CONTACT</h4>
      <div class="row">
        <div class="col-md-6">
          <h2 style="font-family: 'Cormorant Garamond'; font-weight: 400; font-size: 30px; line-height: 78px; text-align: center; letter-spacing: 0.05em; color: #5b5b5b">Get in Touch</h2>

          <form action="#" method="post">
            <div class="form-group" style="margin-top: 20px">
              <label for="name" style="font-family: 'Cormorant Garamond'; font-weight: 300; font-size: 28px; color: #2d2d2d">Name</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" />
            </div>
            <div class="form-group" style="margin-top: 20px">
              <label for="email" style="font-family: 'Cormorant Garamond'; font-weight: 300; font-size: 28px; color: #2d2d2d">Email</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" />
            </div>
            <div class="form-group" style="margin-top: 20px">
              <label for="message" style="font-family: 'Cormorant Garamond'; font-weight: 300; font-size: 28px; color: #2d2d2d">Message</label>
              <textarea class="form-control" name="message" id="message" rows="5"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-outline-info" style="margin-top: 10px; font-family: 'Cormorant Garamond'; font-style: normal; font-weight: 400; font-size: 28px; color: #505050">
              Send
            </button>
          </form>
          <?php
          if(isset($_POST['submit'])){
            $to="ctit23.ylk@ismt.edu.np";
            $name=$_POST['name'];
            $email=$_POST['email'];
            $message=$name."<br>".$email ."<br>".$_POST['message'];
            $subject="Query by" .$name;
            $headers="From: $email";
            if(mail($to,$subject,$message,$headers)){
              echo "Message Sent Successfully";
            }
            else{
              echo "mail not sent";
            }
          }
          
          ?>

        </div>
        <div class="col-md-6">
          <img src="Assets/Images/contact.avif" class="img-fluid" alt="Contact Image" style="width: 90%; height: 600px" />
        </div>
      </div>
    </div>

    <!-- contact end -->
    <!-- creative text start -->
    <div class="jumbotron text-center my-5">
      <h2 style="font-family: Ephesis; font-weight: 500; font: size 1.2rem; text-align: center; color: #b58b61">Enquire now</h2>
      <p style="font-family: Cormorant Garamond; font-size: 48px; text-align: center">“YOU WILL NEVER KNOW THE VALUE OF A MOMENT UNTIL IT BECOMES A MEMORY.”</p>
    </div>
    <!-- creative text end -->
    <!-- details start -->
    <div class="container my-5" style="height: 500px; background: url('Assets/Images/hero.avif') no-repeat center center; background-size: cover; padding: 10px; position: relative">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-4 text-center" style="background: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 5px">
          <i class="fas fa-envelope" style="font-size: 50px; color: #2d2d2d"></i>
          <div style="font-family: 'Cormorant Garamond', serif; font-style: normal; font-weight: 300; font-size: 27px; line-height: 34px; color: #2d2d2d">
            EMAIL
            <br />
            info.radiantmemories@gmail.com
          </div>
        </div>
        <div class="col-4 text-center" style="background: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 5px; margin-top: 20px">
          <i class="fas fa-map-marker-alt" style="font-size: 50px; color: #2d2d2d"></i>
          <div style="font-family: 'Cormorant Garamond', serif; font-style: normal; font-weight: 300; font-size: 28px; line-height: 34px; color: #2d2d2d">
            ADDRESS
            <br />
            Radhakrishna Mandir, Raniban Rd, Kathmandu 44600
          </div>
        </div>
        <div class="col-4 text-center" style="background: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 5px; margin-top: 20px">
          <i class="fas fa-phone-alt" style="font-size: 50px; color: #2d2d2d"></i>
          <div style="font-family: 'Cormorant Garamond', serif; font-style: normal; font-weight: 300; font-size: 28px; line-height: 34px; color: #2d2d2d">
            CONTACT
            <br />
            +977 9812345678
          </div>
        </div>
      </div>
    </div>

    <!-- detail end -->
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
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.587661007024!2d85.28491257514507!3d27.730014776169572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18966e51427b%3A0x5e2afbc70bfc5ec3!2sRadha%20Krishna%20Temple%2C%20Raniban!5e0!3m2!1sen!2snp!4v1736250597458!5m2!1sen!2snp"            width="300"
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
