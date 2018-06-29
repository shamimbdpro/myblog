<?php
  require_once('function/functions.php');
    needLogged();
  // get value
     $option_value = "SELECT * FROM options where option_id='1'";
    $option_resutl = mysqli_query($conn, $option_value);
    $option_data = mysqli_fetch_assoc($option_resutl);

  if(isset($_POST['option'])){
    $page_title=$_POST['page_title'];
    $logo=$_POST['logo'];
    $about=$_POST['about'];
    $widget=$_POST['widget'];
    $copyright=$_POST['copyright'];
  $sql = "UPDATE  options SET page_title='$page_title', logo='$logo',about='$about',widget='$widget',copyright='$copyright' WHERE option_id='1' ";
  if (mysqli_query($conn, $sql)) {
    header("Refresh:0; url=option.php");
    $msg='Update Sucessfully';
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
                  <form class="form-horizontal" action="" method="post">
                  <div class="panel panel-primary">
                    
           <h5 style="text-align:center;color:green"><?php if(isset($msg)){
              echo $msg;
            }
              ?>
            </h5>
                    <div class="panel-body">
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Page title</label>
                            <div class="col-sm-8">
                              <input type="text" name="page_title" class="form-control" value="<?php echo $option_data['page_title']?>">
                            </div>
                          </div>
                     </div>
                       <div class="panel-body">
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Logo</label>
                            <div class="col-sm-8">
                              <input type="text" name="logo" class="form-control" value="<?php echo $option_data['logo']?>">
                            </div>
                          </div>
                     </div>
                     <div class="panel-body">
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">About page details</label>
                            <div class="col-sm-8">
                                <textarea id="editor1" class="form-control" name="about" placeholder="Add Body" ><?php echo $option_data['about']?></textarea></div>
                          </div>
                     </div> 
                    <div class="panel-body">
                        <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Widget</label>
                          <div class="col-sm-8">
                             <textarea id="editor2" class="form-control" name="widget" placeholder="Add Body" ><?php echo $option_data['widget']?></textarea>

                        </div>
                        </div>
                     </div>
                         <div class="panel-body">
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Copyright</label>
                            <div class="col-sm-8">
                              <input type="text" name="copyright" class="form-control" value="<?php echo $option_data['copyright']?>">
                            </div>
                          </div>
                     </div>
                      <div class="panel-footer text-center">
                        <button class="btn btn-sm btn-primary" name="option">Save</button>
                      </div>
                    </div>
                    </form>
                </div><!--col-md-12 end-->
            </div><!--admin-part end-->
         </div><!--row end-->
    </div><!--container-fluid end-->
   <?php get_footer(); ?>