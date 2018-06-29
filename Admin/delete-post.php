<?php 
  $id=$_GET['id'];
  require_once('function/functions.php');
  $img = "SELECT * FROM  blog_posts WHERE post_id='$id'";
      $postImg = mysqli_query($conn, $img);
       while($postpic = mysqli_fetch_assoc($postImg)) { 
        $delete_pic=$postpic['post_image'];
        unlink('uploads/post/'.$delete_pic);
       }
// sql to delete a record
$delete = "DELETE FROM  blog_posts WHERE post_id='$id'";

if (mysqli_query($conn, $delete)) {
    echo "Post deleted successfully";
	header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>