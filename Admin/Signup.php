<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign Up</title>
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
  </head>
  <body>
    <div class="container" style="width: 600px; padding: 20px; background-color: rgb(238, 238, 238); opacity: 90%; margin: 0 auto; margin-top: 40px">
      <h3>Create a new account</h3>

      <form action="" method="post">
        <div class="form-group">
          <label for="First Name">First Name</label>
          <input type="text" class="form-control" name="fname" id="fname" placeholder="Your first name" required />
        </div>
        <div class="form-group">
          <label for="First Name">Last Name</label>
          <input type="text" class="form-control" name="lname" id="lname" placeholder="Your last name" required />
        </div>
        <div class="form-group">
          <label for="">Username</label>
          <input type="text" class="form-control" name="Username" id="Username" placeholder="Enter a username" required />
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="password" class="form-control" name="Password" id="Password" placeholder="Enter a Password" required />
        </div>

        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-success">Sign Up</button>
          <button type="reset" class="btn btn-danger">Cancel</button>
          <br />
          <br />
          <h6>Already have account?</h6>
          <a href="Login.php" class="btn btn-primary">Login</a>
        </div>
      </form>
      <?php
      include 'Connection.php';
      if (isset($_POST['submit'])){

        $a=$_POST['fname'];
        $b=$_POST['lname'];
        $c=$_POST['Username'];
        $d=$_POST['Password'];
        $query="insert into users (First_name, Last_name, username,password) values('$a','$b','$c','$d')";
        $run=mysqli_query($conn,$query);
        if($run){
          echo "<script>window.alert('Signup Successful')</script>";
          echo "<script>window.open('Signup.php','_self')</script>";
        }
        else{
          echo "<script>window.alert('Not Successful ')</script>";
        }
      }
      ?>
    </div>
  </body>
</html>
