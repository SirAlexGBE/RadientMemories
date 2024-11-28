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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="Assets/CSS/Style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400&family=Raleway:wght@400;500;600&family=Ephesis&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="Assets/Images/Logo.png" type="image/x-icon" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Radiant Memories</title>
  </head>

  <body>
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
        document.addEventListener("DOMContentLoaded", function () {
          var path = window.location.pathname.split("/").pop();
          var target = document.querySelectorAll('.nav-link[href="' + path + '"]');
          target.forEach(function (link) {
            link.classList.add("active");
          });
        });
      </script>
    </nav>

    <!-- Portfolio Details Start -->
    <div class="container" style="padding-top: 40px">
      <h2 id="project-title" class="services-title"></h2>
      <p id="project-client"></p>
      <p id="project-date"></p>
      <p id="project-type"></p>
      <p id="project-description"></p>
      <div id="project-photos" class="row"></div>
    </div>
    <!-- Portfolio Details End -->

    <!-- Footer Start -->
    <div class="container-fluid" style="background: #e1edf8; padding: 20px 0; margin-top: 20px">
      <div class="row">
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

    <!-- JavaScript to display project details -->
    <script>
      const urlParams = new URLSearchParams(window.location.search);
      const projectId = urlParams[_{{{CITATION{{{_1{](https://github.com/bradydowling/rwx-blog/tree/ee14f7a00a7bbaf330093b2050d4bf29de9949f0/src%2Fpages%2Farticles%2F2020-12-22---Creating-a-Google-Calendar-Clone-with-D3%2Findex.md)[_{{{CITATION{{{_2{](https://github.com/DevinWinando/simple-memories-album/tree/67de0c0e8e58787b947098b23db264cfa74f97c3/resources%2Fviews%2Flogin%2Flogin.blade.php)[_{{{CITATION{{{_3{](https://github.com/hrithikmallick/Online-examination-in-php/tree/5e6114cfd62914957361a54a6d5d6fa5fcdb04de/login.php)[_{{{CITATION{{{_4{](https://github.com/mengwenwang/InVisible/tree/ab259f0cebf66f67a64d24e131f9e3aa9bcf73cf/partials%2Fheader.php)[_{{{CITATION{{{_5{](https://github.com/pernilko/Harmoni/tree/a2166c29e686b554f39da3facba867d90b933da4/client%2Fsrc%2FContainers%2FEvent%2FComponents%2FshowEvents.js)[_{{{CITATION{{{_6{](https://github.com/anjalisi/AIBot/tree/a09cf0edbb0084401aef867ab35c817bb9a42c7d/index.php)[_{{{CITATION{{{_7{](https://github.com/truongmanhdung/duan1/tree/7657780eb28cae14efd41e349c1c625ed3a1c74e/footer.php)[_{{{CITATION{{{_8{](https://github.com/Piorosen/ulimins-outsourcing/tree/5fa982e4154a1f49a8afc8dd651e79317d8f21d4/user%2Findex1.php)[_{{{CITATION{{{_9{](https://github.com/Mayank199824/book-mania/tree/5a43030ae3e036a8a4e7e2762dce161c6b345d30/new1.php)[_{{{CITATION{{{_10{](https://github.com/fedexperez/telematicaAPI/tree/f0c886bb7a6b48ac0fcc60f3219fffd33f4e4292/resources%2Fviews%2Fbase.blade.php)[_{{{CITATION{{{_11{](https://github.com/febriyanaftd/Tugas-SekolahTB/tree/b8c760424ca22acbb50b01a82d6ad93bf4b297c8/tampil.php)[_{{{CITATION{{{_12{](https://github.com/litposthinker/Tugas-aydin/tree/d488355075682b7260e2bc77502204a9221c1596/portofolio-gue%2Fdetail.php)[_{{{CITATION{{{_13{](https://github.com/Agilbay04/VLMS-JTI/tree/ac9dee3ecf421da62ff9cf5b76dee9de633b83de/bootstrap-4.6.0%2Fsite%2Fcontent%2Fdocs%2F4.6%2Fcomponents%2Fnavbar.md)[_{{{CITATION{{{_14{](https://github.com/germandelvalle/TuCelu/tree/17a72c29ba92565564d534706c1f003cdbebd590/js%2Findex.js)[_{{{CITATION{{{_15{](https://github.com/mharrell8/Matt-Harrells-Portfolio/tree/b0e10261a2e919e4f288902d33f19f629d5b3707/scripts%2Fnav.js)[_{{{CITATION{{{_16{](https://github.com/SANYA131/Basic-Banking-System/tree/563fc08a7fd5fd07b9be08cc21cd34513fb361ef/Contact.php)[_{{{CITATION{{{_17{](https://github.com/ZenNOV/Project/tree/188708d3107e7ede55921200a871e228944f3be7/Main.php)[_{{{CITATION{{{_18{](https://github.com/Naima23/Projet-Fil-Rouge/tree/c21362c246134dd322ca44ab06be89869500ad41/projet_fil_rouge%2Fnav.php)[_{{{CITATION{{{_19{](https://github.com/dheerajpachauri/Web-Designing-project/tree/006d71f9c3a10b230150f7c9357b3b2112b7ed60/indexx.php)[_{{{CITATION{{{_20{](https://github.com/munny006/Medical-Care/tree/59ba04d55dc92504de8e7fcced18cfef20b951f6/index.php)
    </script>
  </body>
</html>
