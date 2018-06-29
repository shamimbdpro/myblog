<?php
  $id=$_GET['id'];
  require_once('function/functions.php');
    needLogged();

// select Data

$sql = "SELECT user_id,username,user_phone,user_email,role_id,user_photo FROM  cit_users WHERE user_id='$id'";
  $result = mysqli_query($conn, $sql);
   $row = mysqli_fetch_assoc($result);

     if(isset($_POST['update'])){
		 $username=$_POST['username'];
		 $phone=$_POST['phone'];
     $email=$_POST['email'];
		 $role_id=$_POST['role'];
		 $image=$_FILES['file'];
		 $image_name='user_'.rand(100000,1000000).rand(10000,1000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
		 $update = "UPDATE  cit_users SET username='$username',user_phone='$phone',user_email='$email',role_id='$role_id',user_photo='$image_name' WHERE user_id='$id' ";
		if (mysqli_query($conn, $update)) {
			 $main=move_uploaded_file($image['tmp_name'],'uploads/users/'.$image_name);		
        echo $row['user_photo'];
        $clean=$row['user_photo'];
        unlink('uploads/users/'.$clean);

       $msg1='Data Updated Sucessfully';

		} else {
			echo "Error updating record: " . mysqli_error($conn);
		}
	 }

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
                             	<a href="all-user.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All User</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
							  <h5 style="color:green;text-align:center"><?php if(isset($msg1)){echo $msg1;}?>
               </h5>
                   <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Username</label>
                            <div class="col-sm-8">
                              <input type="text" name="username" class="form-control" value="<?php echo $row["username"];?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Phone</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="phone" value="<?php echo $row['user_phone']?>">
                            </div>
                          </div>
						  <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-8">
                              <input type="email" name="email" class="form-control" value="<?php echo $row['user_email']?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Passowrd</label>
                            <div class="col-sm-8">
                              <input type="password" class="form-control" value="+01717111221" disabled>
                            </div>
                          </div>
						    <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Admin Role</label>
                            <div class="col-sm-4">
                              <select class="form-control select_cus" name="role">
							  <?php
							   $sel="SELECT * FROM cit_roles";
							   $Q=mysqli_query($conn,$sel);
							   while($sel_result=mysqli_fetch_assoc($Q)){ ?>
								<option value="<?= $sel_result['role_id'];?>"><?= $sel_result['role_name'];?></option>
						<?php
						}
							  ?>
                              </select>

                            </div>
                          </div>
						   <div class="form-group">
								<label for="" class="col-sm-3 control-label">Update Image</label>
								<div class="col-sm-8">
								<img height="60" src="uploads/users/<?php echo $row['user_photo'];?>" alt="" />
								  <input type="file" value="uploads/users/<?php echo $row['user_photo'];?>" name="file">
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
