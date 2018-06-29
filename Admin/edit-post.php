<?php
error_reporting(0);
  $id=$_GET['id'];
  require_once('function/functions.php');
    needLogged();
    // select Data

$sql = "SELECT post_title,post_details,author,post_image FROM  blog_posts WHERE post_id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


     if(isset($_POST['update'])){
    $post_title=$_POST['post_title'];
    $post_details= $_POST['post_details'];
    $author= $_POST['author'];
    $image= $_FILES['post_image']['name'];
    $image_tmp= $_FILES['post_image']['tmp_name'];
    $image_size= $_FILES['post_image']['size'];
    $image_format= array('jpg','jpeg','png','gif');
    $image_name='user_'.rand(100000,1000000).rand(10000,1000000).'.'.pathinfo($image,PATHINFO_EXTENSION);
    $div=explode('.', $image);
    $fle_text=strtolower(end($div));

 $update = "UPDATE  blog_posts SET post_title='$post_title',post_details='$post_details',author='$author',post_image='$image_name' WHERE post_id='$id' ";

  if (mysqli_query($conn, $update)) {
    move_uploaded_file($image_tmp,'uploads/post/'.$image_name);
    $delete_pic=$row['post_image'];
    unlink('uploads/post/'.$delete_pic);
    $msg='Data Updated Sucessfully';
    header('Location:all-post.php');
  } else {
    echo "Error: " . $update . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);

  };

  get_header();
  get_sidebar();
  get_breadcum();
?>                <div class="col-md-12">
                	<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                Update Information
                             </div>
                             <div class="col-md-3 text-right">
                             	<a href="all-post.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Post</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
					    
							   <h5 style="color:green;text-align:center"><?php if(isset($msg1)){echo $msg1;}?>
               </h5>
							
            <div class="panel-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Post Title</label>
                <div class="col-sm-8">
                  <input type="text" name="post_title" class="form-control" value="<?php echo $row['post_title']?>">
                </div>
              </div>
            </div>
            <div class="panel-body">
                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Post Description</label>
                  <div class="col-sm-8">
                        <textarea id="editor1" class="form-control" name="post_details" placeholder="Add Body" ><?php echo $row['post_details']?></textarea>
                </div>
                </div>
             </div>  
                     
						    <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Add Category</label>
                            <div class="col-sm-4">
                       
    <select class="form-control select_cus" name="role">
                              <?php
                           $sel="SELECT * FROM post_catergorys";
                           $Q=mysqli_query($conn,$sel);
                           while($sel_result=mysqli_fetch_assoc($Q)){ ?>
                          <option value="<?= $sel_result['category_id'];?>"><?= $sel_result['category_names'];?></option>
                      <?php    }
                          ?>
                            </select>
                            </div>
                          </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Author</label>
                        <div class="col-sm-4">
                          <input class="form-control" type="text" value="<?php echo $row['author']?>" name="author">
                        </div>
                  </div>
						   <div class="form-group">
								<label for="" class="col-sm-3 control-label">Update Image</label>
								<div class="col-sm-8">
								<img height="60" src="uploads/post/<?php echo $row['post_image'];?>" alt="" />
								  <input type="file" name="post_image" value="<?php echo $row['$post_image'];?>">
								</div>
                           </div>
                      </div>
                      <div class="panel-footer text-center">
                        <button class="btn btn-sm btn-primary" name="update">UPDATE</button>
                      </div>
                    </div>
                    </form>
                </div><!--col-md-12 end-->
            </div><!--admin-part end-->
         </div><!--row end-->
    </div><!--container-fluid end-->
  <?php get_footer();?>
