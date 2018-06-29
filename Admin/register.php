<?php
  require_once('function/functions.php');
    needLogged();
  if(isset($_POST['register'])){
    $Name=$_POST['User_name'];
	  $username= $_POST['Username'];
	  $Phone= $_POST['Phone'];
	  $email= $_POST['email'];
	  $pass= $_POST['pass'];
	  $repass= $_POST['repass'];
    $role= $_POST['role'];
	  $image= $_FILES['file'];
    $image_name='user_'.rand(100000,1000000).rand(10000,1000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);

	 $sql = "INSERT INTO   cit_users (User_name,Username,user_phone,user_email,user_pass,role_id,user_photo)
VALUES ('$Name','$username','$Phone','$email','$pass','$role','$image_name')";

	if (mysqli_query($conn, $sql)) {
    move_uploaded_file($image['tmp_name'],'uploads/users/'.$image_name);
		$msg='Data inserted Sucessfully';
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
                             	<a href="all-user.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Information</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
					
               <h5 style="color:green;text-align: center"><?php if(isset($msg)){echo $msg;}?></h5>
                      <div class="panel-body">
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-8">
                              <input type="text" name="User_name" class="form-control" placeholder="Enter Your Name">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Username</label>
                            <div class="col-sm-8">
                              <input type="text" name="Username" class="form-control" placeholder="Enter Your Username">
                            </div>
                          </div>

						              <div class="form-group">
                            <label for="Phone" class="col-sm-3 control-label">Phone Number</label>
                            <div class="col-sm-8">
                              <input type="number" name="Phone" class="form-control" placeholder="Enter Your Phone Number" id="Phone">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-8">
                              <input type="email" name="email" class="form-control" placeholder="Enter Your Email Address" id="email">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="pass" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-8">
                              <input type="password" name="pass" class="form-control" placeholder="Enter Your Password" id="pass">
                            </div>
                          </div>
						  <div class="form-group">
                            <label for="repass" class="col-sm-3 control-label">Re-password</label>
                            <div class="col-sm-8">
                              <input type="password" name="repass" class="form-control" placeholder="Re-type Your Password" name="repass">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Admin Role</label>
                            <div class="col-sm-4">
                              <select class="form-control select_cus" name="role">
							  <option>Select Role</option>
							  <?php
							   $sel="SELECT * FROM cit_roles";
							   $Q=mysqli_query($conn,$sel);
							   while($sel_result=mysqli_fetch_assoc($Q)){ ?>
								<option value="<?= $sel_result['role_id'];?>"><?= $sel_result['role_name'];?></option>
						<?php	   }
							  ?>

                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Upload</label>
                            <div class="col-sm-8">
                              <input type="file" name="file">
                            </div>
                          </div>
                      </div>
                      <div class="panel-footer text-center">
                        <button class="btn btn-sm btn-primary" name="register">REGISTRATION</button>
                      </div>
                    </div>
                    </form>
                </div><!--col-md-12 end-->
            </div><!--admin-part end-->
         </div><!--row end-->
    </div><!--container-fluid end-->
    <div class="container-fluid footer_full">
    	<div class="container footer">
        	<div class="row">
            </div><!--row end-->
        </div><!--container end-->
    </div><!--container-fluid end-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
  </body>
</html>
