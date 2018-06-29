<?php
  require_once('function/functions.php');
    needLogged();
  if(isset($_POST['post-register'])){
    $post_title=$_POST['post_title'];
    $post_details= $_POST['post_details'];
    $role= $_POST['role'];
    $author= $_POST['author'];
    $image= $_FILES['post_image']['name'];
    $image_tmp= $_FILES['post_image']['tmp_name'];
    $image_size= $_FILES['post_image']['size'];
    $image_format= array('jpg','jpeg','png','gif');
    $image_name='user_'.rand(100000,1000000).rand(10000,1000000).'.'.pathinfo($image,PATHINFO_EXTENSION);
    $div=explode('.', $image);
    $fle_text=strtolower(end($div));

  if(!empty($image)){
     if($image_size > 1000000 ){
       $error="Maximum Upload Size 1MB";
     }elseif(in_array($fle_text, $image_format)===false){
       $error='Image format not validate';
     }else{
   $sql = "INSERT INTO blog_posts(post_title,post_details,category_id,author,post_image)
VALUES ('$post_title','$post_details','$role','$author','$image_name')";
 
  if (mysqli_query($conn, $sql)) {
    move_uploaded_file($image_tmp,'uploads/post/'.$image_name);
    $msg='New post added successfuly';
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
}

}

  }
  get_header();
  get_sidebar();
  get_breadcum();
  
  ?>

                <div class="col-md-12">
                  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                  <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                Add Information
                             </div>
                             <div class="col-md-3 text-right">
                              <a href="all-post.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Post</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- sucess message -->
                  <h5 style="color:green;text-align: center"><?php if(isset($msg)){echo $msg;}?></h5>
                        <!-- Error Message -->
                   <h5 style="color:red;text-align: center"><?php if(isset($error)){echo $error;}?></h5>
                    <div class="panel-body">
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Post Title</label>
                            <div class="col-sm-8">
                              <input type="text" name="post_title" class="form-control">
                            </div>
                          </div>

                        </div>
                      <div class="panel-body">
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Post Description</label>
                            <div class="col-sm-8">
                                  <textarea id="editor1" class="form-control" name="post_details" placeholder="Add Body"></textarea>
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
                              <input class="form-control" type="text" name="author">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Upload Post Image</label>
                            <div class="col-sm-8">
                              <input type="file" name="post_image">
                            </div>
                          </div>
                      </div>
                      <div class="panel-footer text-center">
                        <button class="btn btn-sm btn-primary" name="post-register">REGISTRATION</button>
                      </div>
                    </div>
                    </form>
                </div><!--col-md-12 end-->
            </div><!--admin-part end-->
         </div><!--row end-->
    </div><!--container-fluid end-->
   <?php get_footer(); ?>