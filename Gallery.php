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
<style>
  #toTopBtn {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 99;
    border: none;
    outline: none;
    background-color: #878787;
    color: white;
    cursor: pointer;
    padding: 10px;
    border-radius: 10px;
    font-size: 18px;
  }
  #toTopBtn:hover {
    background-color: #333;
  }

  .gallery-container {
    padding: 20px;
    background-color: white;
    margin: 0 auto;
  }

  .gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 10px;
    justify-items: center;
    align-items: stretch; 
  }

  .gallery-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center top;
    border-radius: 10px;
  }

  .gallery-link {
    display: block;
    position: relative;
  }
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
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation bar end -->

  <div class="container-fluid gallery-container">
  <h2 class="services-title text-center">GALLERY</h2>
  <div class="gallery-grid">
    <?php
    // Fetch all image files from the directory with specified extensions
    $images = glob('Assets/Images/*.{jpg,webp,jpeg,avif}', GLOB_BRACE);

    // Loop through the images and display them
    foreach ($images as $image): ?>
      <a href="#" class="gallery-link" onclick="openModal('<?= htmlspecialchars($image) ?>')"  rel="noopener noreferrer">
        <img src="<?= htmlspecialchars($image) ?>" alt="Gallery Image" class="gallery-image" loading="lazy" />
      </a>
    <?php endforeach; ?>
  </div>
</div>


  <!-- The Modal -->
  <div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="modalImg">
</div>

  <button onclick="topFunction()" id="toTopBtn" title="Go to top">Go to Top</button>

<script>
  // Open the Modal
function openModal(imagePath) {
  var modal = document.getElementById("myModal");
  var modalImg = document.getElementById("modalImg");
  var navbar = document.getElementById("navbar"); // Ensure navbar exists

  modal.style.display = "block";
  modalImg.src = imagePath; // Use the passed image path directly
  if (navbar) {
    navbar.style.display = "none"; // Hide navbar if it exists
  }
}

// Close the Modal when clicking the close button
$(document).ready(function(){
  $(".close").click(function(){
    closeModal();
  });
});

// Close the Modal when clicking outside the modal content
window.onclick = function(event) {
  var modal = document.getElementById("myModal");
  if (event.target === modal) {
    closeModal();
  }
};

// Define the closeModal function to handle modal closing
function closeModal() {
  var modal = document.getElementById("myModal");
  modal.style.display = "none";
  var navbar = document.getElementById("navbar");
  if (navbar) {
    navbar.style.display = "block"; // Show navbar again
  }
}

// Scroll to top button functionality
var mybutton = document.getElementById("toTopBtn");
window.onscroll = function () {
  if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
};

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

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
