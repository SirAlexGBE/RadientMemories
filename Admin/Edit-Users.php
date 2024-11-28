<?php
include 'Connection.php';
if(isset($_GET['submit']))
{
 echo $a=$_GET['id1'];
 echo $b=$_GET['fname1'];
 echo $c=$_GET['lname1'];
 echo $d=$_GET['uname1'];
 echo $e=$_GET['password1'];
   $query="update users set  First_Name='$b', Last_Name='$c', Username='$d', Password='$e' where ID='$a'";
  $run=mysqli_query($conn, $query);
  if($run){

    header("location:Users.php");
    
  }
  else{
    echo "<script>Window.alert('Not Updated')<script>";
  }
}
?>