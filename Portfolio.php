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
            <button class="btn btn-outline-info" type="submit"><a href="Admin/Login.php">Login</a></button>
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

    <!-- Portfolio Start -->
    <div class="container" style="padding-top: 40px">
      <h2 class="services-title">PORTFOLIO</h2>
      <h2 class="featured-story">HIGHLIGHTED WORKS</h2>
    </div>
    <div class="container" style="padding-top: 20px">
      <div class="row mb-4">
        <div class="col-md-6">
          <label for="eventFilter">Filter by Event</label>
          <select id="eventFilter" class="form-select" onchange="filterProjects()" >
            
            <option value="all">All Events</option>
            <option value="Wedding">Wedding</option>
            <option value="Portrait">Portrait</option>
            <option value="Others">Others</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="orderFilter">Sort by Date</label>
          <select id="orderFilter" class="form-select" onchange="sortProjects()">
            <option value="desc">Newest First</option>
            <option value="asc">Oldest First</option>
           
          </select>
        </div>
      </div>
    </div>
    <div class="jumbotron">
      <div class="container">
        <div class="row" id="projectsContainer" style="margin-top: 2px">
          <?php 
include 'Admin/Connection.php';
 $sql = "SELECT id, client, event, Cover, date FROM projects"; 
$result = $conn->query($sql); 
if ($result->num_rows > 0) { 
while($row = $result->fetch_assoc()) { 
$eventCategory = strtolower($row["event"]); 
$category = ($eventCategory === 'wedding' || $eventCategory === 'portrait') ? $eventCategory : 'others'; 
echo ' 
<div class="col-md-4 project-item" data-event="' . $category . '" data-date="' . $row["date"] . '" data-title="' . $row["client"] . '"> 
<div class="card"> <img src="' . $row["Cover"] . '" class="card-img-top" width="300" height="300" alt="Portfolio"> 
<a href="PortfolioDetails.php?id=' . $row["id"] . '" style="text-decoration: none">
 <div class="card-body"> 
<h5 class="Client">' . $row["client"] . '</h5> 
<h2 class="Event">' . $row["event"] . '</h2> 
</div> 
</a> 
</div> 
</div> 
'; } 
} else {
 echo "0 results";
 }
 $conn->close();
 ?>
        </div>
      </div>
    </div>
    <div class="container my-5 text-center">
      <a href="Contact.php" class="btn btn-outline-info my-5" style="font-family: 'Cormorant Garamond'; font-style: normal; font-weight: 500; font-size: 28px; color: #454545">Get In Touch</a>
    </div>

    <!-- creative text start -->
    <div class="jumbotron text-center my-5" style="background: url('Assets/Images/hero 2.avif') no-repeat center center; background-size: cover; height: 300px">
      <div class="container" style="background: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 5px; margin-top: 20px">
        <div
          style="
            font-family: 'Cormorant Garamond', serif;
            font-style: normal;
            font-weight: 300;
            font-size: 28px;
            line-height: 34px;
            color: #2d2d2d;
            border: #25d366 1px solid;
            padding: 10px;
            border-radius: 5px;
          "
        >
          <h4 style="font-family: 'Ephesis'; font-style: normal; font-weight: 400; font-size: 60px; text-align: center; color: #bba085">Our Promise</h4>

          We guarantee breathtaking photos that perfectly capture the magic of your special day, or your money back
        </div>
      </div>
    </div>
    <!-- creative text end -->

    <script>
      function filterProjects() {
        let filter = document.getElementById("eventFilter").value.toLowerCase();
        let projects = document.querySelectorAll(".project-item");
        projects.forEach((project) => {
          let event = project.getAttribute("data-event").toLowerCase();
          if (filter === "all" || event === filter) {
            project.style.display = "block";
          } else {
            project.style.display = "none";
          }
        });
      }
      function sortProjects() {
        let order = document.getElementById("orderFilter").value;
        let projects = Array.from(document.querySelectorAll(".project-item"));
        let container = document.getElementById("projectsContainer");
        projects.sort((a, b) => {
          let aValue = a.getAttribute("data-date");
          let bValue = b.getAttribute("data-date");
          return order === "asc" ? new Date(aValue) - new Date(bValue) : new Date(bValue) - new Date(aValue);
        });
        projects.forEach((project) => container.appendChild(project));
      }
      document.addEventListener("DOMContentLoaded", () => {
        filterProjects();
        sortProjects();
      });
    </script>
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
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.587661007024!2d85.28491257514507!3d27.730014776169572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18966e51427b%3A0x5e2afbc70bfc5ec3!2sRadha%20Krishna%20Temple%2C%20Raniban!5e0!3m2!1sen!2snp!4v1736250597458!5m2!1sen!2snp"             width="300"
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
