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
    <div class="container" style="margin-bottom: 20px">
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
          <a href="Users.php" class="btn btn-primary btn-block" style="margin-top: 20px">
            <i class="fa fa-user" aria-hidden="true" style="font-size: medium"></i>
            &nbsp; Users
          </a>
        </div>
        <div class="col-md-8">
          <h2 class="display-4">Update Project</h2>
          <form action="Update-post.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="ID">ID:</label>
              <input type="text" name="id1" id="id1" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $_GET['id']; ?>" readonly />
            </div>
            <div class="form-group">
              <label for="Client">Client</label>
              <input type="text" name="client1" id="client1" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $_GET['client']; ?>" />
            </div>
            <div class="form-group">
              <label for="event">Event</label>
              <input type="text" name="event1" id="event1" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $_GET['event']; ?>" />
            </div>
            <div class="form-group">
              <label for="date">Date</label>
              <input type="date" name="date1" id="date1" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $_GET['date']; ?>" />
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" name="description1" id="description1" rows="3"><?php echo $_GET['description']; ?></textarea>
            </div>
            <div class="form-group">
              <label for="cover">Cover Image</label>
              <input type="file" name="cover1" id="cover1" class="form-control-file" placeholder="" aria-describedby="helpId" />
              <small id="fileHelpId" class="form-text text-muted">Update cover image</small>
            </div>
            <div class="form-group">
              <label for="images">Upload Additional Images</label>
              <input type="file" class="form-control-file" id="images" name="images[]" multiple accept="image/*" />
              <small class="form-text text-muted">Select multiple images to upload</small>
            </div>
            <!-- submit button -->
            <button type="submit" class="btn btn-success btn-lg" name="submit">Update Post</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>

<?php 
}
?>
