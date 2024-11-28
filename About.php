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
            <button class="btn btn-outline-info" type="submit"><a href="Admin/Login.Php">Login</a></button>
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

    <!-- About Us start -->
    <div class="jumbotron">
      <h2 class="portfolio-title">About Us</h2>
      <h1 class="display-3 text-center featured-story">Our Story</h1>
      <div class="container my-5">
        <div class="row align-items-center">
          <div class="col-md-6">
            <img src="Assets/Images/About.avif" style="height: 700px" alt="Team Radiant Memories" class="img-fluid rounded" />
          </div>
          <div class="col-md-6">
            <h2 class="about-title">Hello, We are Team Radiant Memories</h2>
            <p class="about-description" style="text-align: justify">
              Welcome to Radiant Memories! We are a passionate team of dedicated photographers and skilled editors who have been capturing life's beautiful moments since our early years. With a keen
              eye for detail and a deep love for the art of photography, we established our studio two years ago to turn our vision into reality. Our team consists of talented photographers and a
              creative editor, working together to bring your stories to life with stunning images that you’ll cherish forever. At Radiant Memories, we don’t just take pictures — we capture emotions,
              memories, and experiences.
            </p>
            <p class="about-description" style="text-align: justify">
              We strted this photography studio since 2022. We are a team of passionate photographers who specialize in wedding photography, potrait photography, and event photography. Our team is
              built of 3 members. Alex Kandel being the leader of the team. Our other team member consist of Bipin Kafle and Saajan Bista.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- About Us end -->
    <!-- portfolio start -->
    <div class="container my-5">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <img src="Assets/Images/Portfolio 1.avif" alt="Wedding Image" height=" 470px" ; style="border: 1px solid #ccc; border-radius: 10px" />
          <img src="Assets/Images/Portfolio 2.avif" alt="Wedding Image" height=" 470px" ; style="border: 1px solid #ccc; border-radius: 10px" />
        </div>
        <div class="col-md-2"></div>
        <a href="Portfolio.php" class="btn btn-outline-info my-5" style="margin-top: none; margin-left: 800px; width: 130px; height: 40px; font-size: large; font-family: 'Cormorant Garamond'">
          View portfolio
        </a>
      </div>
    </div>
    <!-- portfolio end -->
    <!-- Our team -->
    <div class="container">
      <h4 class="services-title">Get To Know Us</h4>
      <h2 class="featured-story">Our Team</h2>
    </div>
    <div class="jumbotron" style="padding: 10px">
      <div class="row">
        <div class="col-md-3">
          <img src="Assets/Images/Team 1.jpg" class="img-thumbnail" alt="Team 1" height="410px" width="280px" />
        </div>
        <div class="col-md-9">
          <h4>Founder & Lead Photographer/Videographer at Radiant Memories</h4>
          <p class="about-description" style="text-align: justify">
            Alex Kandel is the visionary behind Radiant Memories. As an expert in wedding photography and videography, Alex brings over 7 years of experience capturing timeless
            moments with artistry and precision. His journey began with a passion for storytelling through the lens, transforming fleeting emotions into cherished memories. Under Alex's leadership,
            Radiant Memories has grown into one of Kathmandu’s premier photography centers, renowned for its commitment to excellence and personalized service. He oversees all operations, ensuring
            that every project reflects the company’s dedication to quality and creativity. Specializing in weddings, Alex has a unique ability to capture the magic of each couple's special day,
            focusing on genuine emotions and intimate details. His expertise ensures that every frame tells a story, preserving the essence of each moment. Beyond his technical skills, Alex is known
            for his warm approach and keen eye for detail, making clients feel at ease and ensuring their vision is beautifully realized. His dedication to his craft and clients is at the heart of
            Radiant Memories’ success. Whether you’re celebrating your wedding, an engagement, or a special event, Alex’s passion and expertise guarantee memories you’ll treasure forever.
          </p>
        </div>
      </div>
      <div class="container" style="padding: 0; width: 100%">
        <div class="row">
          <div class="col">
            <div class="alex-kandel" style="font-family: 'Inter'; font-style: normal; font-weight: 600; font-size: 14px; color: #000000">
              ALEX KANDEL
              <!-- Font Awesome social icons -->
              <i class="fab fa-facebook-f" style="font-size: 24px; color: #000000; margin-left: 10px"></i>
              <i class="fab fa-twitter" style="font-size: 24px; color: #000000; margin-left: 10px"></i>
              <i class="fab fa-instagram" style="font-size: 24px; color: #000000; margin-left: 10px"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-3">
          <img src="Assets/Images/Team 2.jpg" class="img-thumbnail" alt="Team 2" height="340px" width="280px" />
        </div>
        <div class="col-md-9">
          <h4>Senior Photographer & Videographer at Radiant Memories</h4>
          <p class="about-description" style="text-align: justify">
            Bipin Kafle is a seasoned professional in the field of photography and videography at Radiant Memories. With a rich experience spanning 5 years, Bipin has been an integral
            part of countless weddings and events, capturing moments that resonate with emotional depth and visual storytelling. His expertise extends beyond technical proficiency; Bipin is celebrated
            for his creative vision and his ability to make subjects feel at ease, resulting in natural and heartfelt images. At Radiant Memories, he collaborates closely with Alex Kandel, bringing a
            shared dedication to quality and an eye for detail to every project. Bipin's work is characterized by its elegance and authenticity, ensuring that each photograph and video he produces is
            a true reflection of the event’s spirit. Clients appreciate his professionalism, warmth, and the genuine care he takes in preserving their most cherished memories. Whether it's a wedding,
            an engagement, or any special occasion, Bipin’s artistry and commitment shine through in every frame.
          </p>
        </div>
      </div>
      <div class="container" style="padding: 0; width: 100%">
        <div class="row">
          <div class="col">
            <div class="bipin-kafle" style="font-family: 'Inter'; font-style: normal; font-weight: 600; font-size: 14px; color: #000000">
              BIPIN KAFLE
              <!-- Font Awesome social icons -->
              <i class="fab fa-facebook-f" style="font-size: 24px; color: #000000; margin-left: 10px"></i>
              <i class="fab fa-twitter" style="font-size: 24px; color: #000000; margin-left: 10px"></i>
              <i class="fab fa-instagram" style="font-size: 24px; color: #000000; margin-left: 10px"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-3">
          <img src="Assets/Images/Team 3.jpg" class="img-thumbnail" alt="Team 3" height="360px" width="280px" style="margin: 0 auto" />
        </div>
        <div class="col-md-9">
          <h4>Senior Editor at Radiant Memories</h4>
          <p class="about-description" style="text-align: justify">
            Saajan Bista is the creative force behind the editing team at Radiant Memories. With 6 years of experience in photo and video editing, Saajan ensures that every
            project is polished to perfection. His keen eye for detail and storytelling transforms raw footage and images into cohesive, compelling narratives. Saajan’s expertise lies in his ability
            to enhance the visual and emotional impact of each project, bringing out the best in every shot. He works closely with photographers and videographers to ensure that the final product not
            only meets but exceeds client expectations. Saajan is known for his innovative techniques and dedication to maintaining the highest standards of quality. His contributions are vital to the
            success of Radiant Memories, ensuring that every moment captured is beautifully preserved and presented. Clients appreciate his meticulous approach and the passion he brings to his work,
            making sure that every memory is presented in its best light.
          </p>
        </div>
      </div>
      <div class="container" style="padding: 0; width: 100%">
        <div class="row">
          <div class="col">
            <div class="saajan-bista" style="font-family: 'Inter'; font-style: normal; font-weight: 600; font-size: 14px; color: #000000">
              SAAJAN BISTA
              <!-- Font Awesome social icons -->
              <i class="fab fa-facebook-f" style="font-size: 24px; color: #000000; margin-left: 10px"></i>
              <i class="fab fa-twitter" style="font-size: 24px; color: #000000; margin-left: 10px"></i>
              <i class="fab fa-instagram" style="font-size: 24px; color: #000000; margin-left: 10px"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- out team end -->
    <!-- Awards start -->
    <div class="container">
      <h2 class="testimonial-title">Awards</h2>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img src="Assets/Images/Trophy 1.png" alt="Award 1" class="img-fluid" style="height: 300px" />
            <h2 class="featured-story" style="text-align: justify">NPC 22</h2>
            <p style="font-family: Cormorant Garamond; font-size: 18px; text-align: justify">
              We are thrilled to have won the prestigious Nepal Photo Contest in 2022, a testament to our dedication to capturing the essence of Nepal through our lens.
            </p>
          </div>
          <div class="col-md-4">
            <img src="Assets/Images/Trophy 2.png" alt="Award 2" class="img-fluid" style="height: 300px" />
            <h2 class="featured-story">KPF 23</h2>
            <p style="font-family: Cormorant Garamond; font-size: 18px; text-align: justify">
              In 2023, our work was honored at the Kathmandu Photo Festival, celebrating our ability to tell compelling stories through photography.
            </p>
          </div>
          <div class="col-md-4">
            <img src="Assets/Images/Trophy 3.png" alt="Award 3" class="img-fluid" style="height: 300px" />
            <h2 class="featured-story">AAFA 22</h2>
            <p style="font-family: Cormorant Garamond; font-size: 18px; text-align: justify">
              We are proud recipients of the Asia Art Festival Awards in 2022, recognizing our commitment to artistic excellence and innovation in photography.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Award end -->

    <!-- creative start -->
    <div class="jumbotron jumbotron-fluid" style="padding: 10px">
      <div class="row">
        <div class="col-md-6">
          <h4 class="services-title">Crafting Memories</h4>
          <h2 class="featured-story">Your Story, Our Lens</h2>
          <p style="font-family: Cormorant Garamond; font-size: 28px">
            Your wedding day is a once-in-a-lifetime event, and choosing the right photographer is essential to preserving its magic for years to come. we would be honored to be a part of your special
            day.
          </p>
        </div>
        <div class="col-md-3">
          <img src="Assets/Images/creative 1.avif" alt="kissing" style="height: 400px; width: 300px" />
        </div>

        <div class="col-md-3"></div>
      </div>
    </div>
    <!-- creative end -->

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
