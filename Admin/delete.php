<?php 
  $id=$_GET['id'];
  require_once('function/functions.php');
     $user_pic = "SELECT * FROM  cit_users WHERE user_id='$id'";
      $user_result = mysqli_query($conn, $user_pic);
       while($user_photo = mysqli_fetch_assoc($user_result)) { 
        $delete_pic_user=$user_photo['user_photo'];
        unlink('uploads/users/'.$delete_pic_user);
       }
  
// sql to delete a record
$delete = "DELETE FROM  cit_users WHERE user_id='$id'";

if (mysqli_query($conn, $delete)) {
    echo "Post deleted successfully";
	header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>