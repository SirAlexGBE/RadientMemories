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
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Dancing+Script:wght@400..700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- Favicon -->
    <link rel="shortcut icon" href="Assets/Images/Logo.png" type="image/x-icon" />

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
      .image-container {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
      }
      .image-container img {
        flex: 1 1 29%;
        width: 500px;
        height: 500px;
        object-fit: cover;
        margin: 10px;
        border-radius: 10px;
      }
      /* Modal CSS */
      .modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 60px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0,0.9);
      }

      .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
      }

      .modal-content, .close {
        animation-name: zoom;
        animation-duration: 0.6s;
      }

      @keyframes zoom {
        from {transform:scale(0)} 
        to {transform:scale(1)}
      }

      .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
      }

      .close:hover,
      .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
      }
    </style>
    <title>Radiant Memories</title>
  </head>

  <body>
    <!-- Navigation bar start -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-transparent shadow-sm fixed-top">
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
    <!-- Content start -->
<div class="container" style="padding-top: 40px">
  <h2 class="services-title">Gallery</h2>
  <?php 
  include 'Admin/connection.php';
  $portfolio_id = $_GET['id']; 
  $query = "SELECT * FROM projects WHERE id = '$portfolio_id'"; 
  $result = mysqli_query($conn, $query); 
  $row = mysqli_fetch_assoc($result); 
  ?>
  <h2 class="featured-story"><?php echo $row['client']; ?></h2>
</div>
<div class="container">
  <div style="display: flex; justify-content: center; align-items: center; padding-top: 40px">
    <div style="display: flex; align-items: center; margin-right: 40px">
      <span style="font-family: 'Cormorant Garamond', serif; font-weight: 300; font-size: 28px; color: #2d2d2d; margin-right: 10px">Date:</span>
      <span style="font-family: 'Dancing Script'; font-style: normal; font-weight: 400; font-size: 24px; text-align: center; letter-spacing: 0.05em; color: #bba085">
        <?php echo date('jS F, Y', strtotime($row['date'])); ?>
      </span>
    </div>
    <div style="display: flex; align-items: center; margin-left: 40px">
      <span style="font-family: 'Cormorant Garamond', serif; font-weight: 300; font-size: 28px; color: #2d2d2d; margin-right: 10px">Category:</span>
      <span style="font-family: 'Dancing Script'; font-style: normal; font-weight: 400; font-size: 24px; text-align: center; letter-spacing: 0.05em; color: #bba085">
        <?php echo $row['event']; ?>
      </span>
    </div>
  </div>
  <div style="display: flex; justify-content: center; align-items: center; padding-top: 40px">
    <img src="<?php echo $row['Cover']; ?>" alt="Cover" style="width: 900px; height: 600px; margin-right: 40px; border-radius: 10px" />
  </div>
  <p style="font-family: 'Cormorant Garamond'; font-style: normal; font-weight: 400; font-size: 22px; text-align: center; letter-spacing: 0.05em; color: #000000; padding-top: 40px">
    <?php echo $row['description']; ?>
  </p>
</div>
<div class="container">
  <div class="image-container">
    <?php 
    $images = explode(',', $row['images']);
     foreach ($images as $image) { 
      echo ' 
      <img src="' . trim($image) . '" alt="Portfolio Image" class="img-fluid portfolio-image" style="border-radius: 10px" onclick="openModal(this)" />
    '; } ?>
  </div>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="modalImg">
</div>

<script>
  // Open the Modal
  function openModal(imgElement) {
    var modal = document.getElementById("myModal");
    var modalImg = document.getElementById("modalImg");
    modal.style.display = "block";
    modalImg.src = imgElement.src;
    navbar.style.display = "none";
  }

  // Close the Modal
  $(document).ready(function(){
    $(".close").click(function(){
      $("#myModal").css("display", "none");
      $("#navbar").css("display", "block");
    });
  });
</script>



    <!-- Content end -->
    <div class="container my-5 text-center">
      <h2 style="font-family: Ephesis; font-weight: 500; font-size: 1.6rem; text-align: center; color: #b58b61">More Works</h2>
      <div class="row" style=" display: flex; justify-content: center; align-items: center;">
        <?php
        $sql = "SELECT id, Cover FROM projects Where id!= '$portfolio_id' ORDER BY RAND() LIMIT 4"; 
        $result = $conn->query($sql); 
        if ($result->num_rows > 0) { while($row = $result->fetch_assoc()) { 
          echo ' 
          <div class="col-md-3" style="padding: 10px"> 
            <a href="PortfolioDetails.php?id=' . $row["id"] . '" style="text-decoration: none"> <img src="'. $row["Cover"] . '" class="img-fluid" style="width: 300px; height: 300px; border-radius: 10px" alt="Portfolio">
             </a> 
            </div> 
            '; } } 
            else { 
              echo "0 results";
             } 
             $conn->close(); 
             ?>
      </div>
  </div>
  
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
          <p style="font-family: Cormorant Garamond; color: #2d2d2d">&copy; 2024 All Rights Reserved by Radiant Memories</p>
        </div>
      </div>
    </div>

    <!-- Footer End -->
  </body>
</html>
