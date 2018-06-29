<?php 
  $id=$_GET['contact'];
  require_once('function/functions.php');
 
// sql to delete a record
$delete = "DELETE FROM  contact WHERE contact_id='$id'";

if (mysqli_query($conn, $delete)) {
    echo "Contact deleted successfully";
	header('location:contact.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>