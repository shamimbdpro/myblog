<?php
  require_once('function/functions.php');
    needLogged();
  if(isset($_POST['image_gellery'])){
    $image= $_FILES['gellery'];
    $image_name='user_'.rand(100000,1000000).rand(10000,1000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
  
   $sql = "INSERT INTO gellery(gellery_image)
VALUES ('$image_name')";
  if (mysqli_query($conn, $sql)) {
    move_uploaded_file($image['tmp_name'],'uploads/gellery/'.$image_name);
    $msg='Image inserted Sucessfully';
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);

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
                              <a href="all-gellery.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Gellery</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
           <h5 style="color:green;text-align:center"> <?php if(isset($msg)){echo $msg;}?> </h5>
                    <div class="panel-body">
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Upload Gellery Image</label>
                            <div class="col-sm-8">
                              <input type="file" name="gellery">
                            </div>
                          </div>
                      </div>
                      <div class="panel-footer text-center">
                        <button class="btn btn-sm btn-primary" name="image_gellery">Add Image</button>
                      </div>
                    </div>
                    </form>
                </div><!--col-md-12 end-->
            </div><!--admin-part end-->
         </div><!--row end-->
    </div><!--container-fluid end-->
   <?php get_footer(); ?>