<?php
if(isset($_POST['submit'])) {
    include 'Connection.php';

    // Get form data
    $id = $_POST['id1'];
    $client = $_POST['client1'];
    $event = $_POST['event1'];
    $date = $_POST['date1'];
    $description = $_POST['description1'];

    // Handle cover image upload
    $cover_name = $_FILES['cover1']['name'];
    $cover_tmp = $_FILES['cover1']['tmp_name'];
    $cover_path = "Assets/Images/$cover_name"; // Adjust the path as necessary

    if(!empty($cover_name)) {
        move_uploaded_file($cover_tmp, "../$cover_path");
    }

    // Handle additional images upload
    $images = $_FILES['images']['name'];
    $image_paths = [];

    if(!empty($images[0])) {
        foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
            $image_name = $_FILES['images']['name'][$key];
            $image_tmp = $_FILES['images']['tmp_name'][$key];
            $image_path = "Assets/Images/$image_name"; // Adjust the path as necessary
            move_uploaded_file($image_tmp, "../$image_path");
            $image_paths[] = $image_path;
        }
        $images_string = implode(',', $image_paths);
    }

    // Update the database
    if(!empty($cover_name) && !empty($images[0])) {
        $query = "UPDATE projects SET client='$client', event='$event', date='$date', description='$description', cover_image='$cover_path', images='$images_string' WHERE id='$id'";
    } elseif(!empty($cover_name)) {
        $query = "UPDATE projects SET client='$client', event='$event', date='$date', description='$description', cover_image='$cover_path' WHERE id='$id'";
    } elseif(!empty($images[0])) {
        $query = "UPDATE projects SET client='$client', event='$event', date='$date', description='$description', images='$images_string' WHERE id='$id'";
    } else {
        $query = "UPDATE projects SET client='$client', event='$event', date='$date', description='$description' WHERE id='$id'";
    }

    $run = mysqli_query($conn, $query);

    if($run) {
        echo "<script>alert('Post Updated Successfully!');</script>";
        header("location:view-post.php");
        
    } else {
        echo "<script>alert('Error Found!');</script>";
    }
}
?>
