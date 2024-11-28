<?php
include 'Connection.php';
if(isset($_GET['Del']))
{
    $delid=$_GET['Del'];
    $query="delete from projects where id='$delid'";
    $run=mysqli_query($conn,$query);
    if($run)
    {
        echo "<script>window.alert('Deleted Successfully')</script>";
        echo "<script>window.open('View-post.php','_self')</script>";
    }
    else
    {
        echo "<script>window.alert('Unable to Delete')</script>";
    }
}
?>