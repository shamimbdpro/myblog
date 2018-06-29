<?php
error_reporting(0);
  require_once('function/functions.php');
 needLogged();
  if($_SESSION['role_id']==1){
  get_header();
  get_sidebar();
  get_breadcum();
  $id=$_GET['id'];
  $deleteID=$_GET['delete'];
  // Delete
// sql to delete a record
$delete = "DELETE FROM  post_catergorys WHERE category_id='$deleteID'";
if (mysqli_query($conn, $delete)) {
    $msg="Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
   // edit
  $edit = "SELECT * FROM  post_catergorys WHERE category_id='$id'";
   $edit_data = mysqli_query($conn, $edit);
   $edti_row= mysqli_fetch_assoc($edit_data);
   if(isset($_POST['add_cat'])){
     $add=$_POST['add'];
      $insert = "INSERT INTO post_catergorys (category_names) VALUES ('$add')";
      mysqli_query($conn, $insert);
      if($insert){
      	 $msg="Insert Success";
      }
  }
       // update
 if(isset($_POST['add_cat1'])){
      $add=$_POST['add'];
      $update = "UPDATE post_catergorys SET category_names='$add' WHERE category_id='$id'";
      mysqli_query($conn, $update);
      if($update){
      	 $msg="Update Success";
      }
   }
?>
      
 <div class="container" style="max-width:800px"> 
   <div class="row">
   	     <h5 style="color:green;text-align: center"><?php if(isset($msg)){echo $msg;}?></h5>
     <form style="max-width:300px; margin:0 auto" action="" method="post">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Add Cetegory Name</label>
      <input type="text" class="form-control mb-2" name="add"  required>
    </div>
    <div style="max-width:300px; margin:7px auto;text-align:center">
      <button type="submit" name="add_cat" class="btn btn-primary mb-2">ADD</button>
    </div>
  </div>
</form>
     <form style="max-width:300px; margin:0 auto" action="" method="post">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Add Cetegory Name</label>
      <input type="text" class="form-control mb-2" name="add" value="<?php echo $edti_row['category_names'];?>" required>
    </div>
    <div style="max-width:300px; margin:7px auto;text-align:center">
      <button type="submit" name="add_cat1" class="btn btn-primary mb-2">Update</button>
    </div>
  </div>
</form>
   </div>
 </div> 
 <!-- show category   -->
 <div class="container" style="max-width:500px">       
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	<?php 
   $category="SELECT * FROM  post_catergorys";
   $Q=mysqli_query($conn,$category);
   while($row=mysqli_fetch_assoc($Q)){ ?>
    <tr>
        <td cass="block"><?php echo $row['category_id']?></td>
        <td><?php echo $row['category_names']?></td>
        <td>
        	<a class="btn btn-primary" href="?id=<?php echo $row['category_id']?>">Edit</a>
        	<a class="btn btn-danger" href="?delete=<?php echo $row['category_id']?>">Delete</a>
        </td>
      </tr>
 <?php  }
    	?>
    </tbody>
  </table>
</div>
<?php
   get_footer();
}else{
  echo "You Have No Permission";
}

 ?>