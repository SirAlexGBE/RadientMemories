<?php
session_start();
if(!isset($_SESSION['Username']))
{
  header("location: Login.php");
}
else{

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin Panel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <!-- nav bar start -->
    <nav class="navbar navbar-expand-md navbar-dark" style="background-color: navy">
      <a class="navbar-brand" href="main.php">
        <i class="fa fa-tachometer" aria-hidden="true"></i>
        Dashboard
      </a>
      <button
        class="navbar-toggler d-lg-none"
        type="button"
        data-toggle="collapse"
        data-target="#collapsibleNavId"
        aria-controls="collapsibleNavId"
        aria-expanded="false"
        aria-label="Toggle navigation"
      ></button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
        <form class="form-inline my-2 my-lg-0">
          <i class="fa fa-user-circle" aria-hidden="true" style="color: white">
            &nbsp;
            <?php echo $_SESSION['Username'] ?>
          </i>
          &nbsp; &nbsp;
          <a href="Logout.php">
            <i class="fa fa-sign-out" aria-hidden="true" style="color: white">Logout</i>
          </a>
        </form>
      </div>
    </nav>
    <!-- nav BAR end -->
    <!-- Content Start -->
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="add-post.php" class="btn btn-primary btn-block" style="margin-top: 20px">
            <i class="fa fa-plus-square-o" aria-hidden="true" style="font-size: medium"></i>
            &nbsp; Add Project
          </a>
          <a href="view-post.php" class="btn btn-primary btn-block" style="margin-top: 20px">
            <i class="fa fa-newspaper-o" aria-hidden="true" style="font-size: medium"></i>
            &nbsp; View Project
          </a>
          <a href="reservation.php" class="btn btn-primary btn-block" style="margin-top: 20px">
            <i class="fa fa-camera" aria-hidden="true" style="font-size: medium"></i>
            &nbsp; Reservation
          </a>
          <a href="users.php" class="btn btn-primary btn-block" style="margin-top: 20px">
            <i class="fa fa-user" aria-hidden="true" style="font-size: medium"></i>
            &nbsp; Users
          </a>
        </div>
        <div class="col-md-9">
          <h2 class="display-4 text-center" style="margin-top: 20px">
            <i class="fa fa-plus-circle" aria-hidden="true"></i>
            Add New Project
          </h2>
          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="client">Client</label>
              <input type="text" class="form-control" name="client" id="client" placeholder="Client Name" aria-describedby="helpId" />
            </div>
            <div class="form-group">
              <label for="event">Event</label>
              <input type="text" class="form-control" name="event" id="event" placeholder="Event" aria-describedby="helpId" />
            </div>
            <div class="form-group">
              <label for="date">Date</label>
              <input type="date" class="form-control" name="date" id="date" aria-describedby="helpId" />
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="cover">Cover Image</label>
              <input type="file" class="form-control-file" name="cover" id="cover" aria-describedby="fileHelpId" />
              <small id="fileHelpId" class="form-text text-muted">Add cover image</small>
            </div>
            <div class="form-group">
              <label for="images">Upload Additional Images</label>
              <input type="file" class="form-control-file" id="images" name="images[]" multiple accept="image/*" />
              <small class="form-text text-muted">Select multiple images to upload</small>
            </div>
            <!-- Preview Section -->
            <div class="row mt-4" id="imagePreview"></div>

            <div class="form-group mt-3">
              <button type="submit" name="submit" class="btn btn-success">Add Post</button>
              <button type="reset" name="reset" class="btn btn-danger">Cancel</button>
            </div>
          </form>

          <?php
if(isset($_POST['submit'])) {
    include 'Connection.php';
    
    // Get form data
    $client = $_POST['client'];
    $event = $_POST['event'];
    $date = $_POST['date'];
    $description = $_POST['description'];

    // Handle cover image upload
    $cover_name = $_FILES['cover']['name'];
    $cover_tmp = $_FILES['cover']['tmp_name'];
    $cover_path = "Assets/Images/$cover_name"; // Adjust the path as necessary
    move_uploaded_file($cover_tmp, "../$cover_path");

    // Handle additional images upload
    $images = $_FILES['images']['name'];
    $image_paths = [];

    foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
        $image_name = $_FILES['images']['name'][$key];
        $image_tmp = $_FILES['images']['tmp_name'][$key];
        $image_path = "Assets/Images/$image_name"; // Adjust the path as necessary
        move_uploaded_file($image_tmp, "../$image_path");
        $image_paths[] = $image_path;
    }
    $images_string = implode(',', $image_paths);

    // Insert data into database
    $query = "INSERT INTO projects ( event,client, date,  description, Cover, images)
              VALUES ('$event', '$client', '$date', '$description', '$cover_path', '$images_string')";
    $run = mysqli_query($conn, $query);

    if($run) {
        echo "<script>alert('Post Added Successfully!');</script>";
    } else {
        echo "<script>alert('Error Found!');</script>";
    }
}?>


          <script>
            // JavaScript to preview selected images
            document.getElementById("images").addEventListener("change", function (event) {
              const previewContainer = document.getElementById("imagePreview");
              previewContainer.innerHTML = ""; // Clear previous previews

              const files = event.target.files;
              if (files) {
                Array.from(files).forEach((file) => {
                  const reader = new FileReader();
                  reader.onload = function (e) {
                    const imgElement = document.createElement("div");
                    imgElement.className = "col-md-3 mb-3";
                    imgElement.innerHTML = `<img src="${e.target.result}" class="img-fluid rounded shadow-sm" alt="Uploaded Image">`;
                    previewContainer.appendChild(imgElement);
                  };
                  reader.readAsDataURL(file);
                });
              }
            });
          </script>
        </div>
      </div>
    </div>
  </body>
</html>

<?php 
}
?>