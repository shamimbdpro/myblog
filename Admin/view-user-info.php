<?php
  $id=$_GET['id'];
  require_once('function/functions.php');

  	$sql = "SELECT * FROM  cit_users WHERE user_id='$id'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
	}

 get_header();
 get_sidebar();
 get_breadcum();

?>                <div class="col-md-12">
                	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                Personal Information
                             </div>
                             <div class="col-md-3 text-right">
                             	<a href="all-user.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> All Information</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
                          <div class="col-md-1">
                          </div>
                          <div class="col-md-9">
                          	<table class="table table-hover table-striped table-responsive view_table_cus">
                               <tr>
                                  <td>Name</td>
                                    <td>:</td>
                                    <td><?php echo $row['User_name'];?></td>
                                </tr>
                            	<tr>
                                	<td>Username</td>
                                    <td>:</td>
                                    <td><?php echo $row['username'];?></td>
                                </tr>
                                <tr>
                                	<td>Email</td>
                                    <td>:</td>
                                    <td><?php echo $row['user_email'];?></td>
                                </tr>
                                <tr>
                                	<td>Phone</td>
                                    <td>:</td>
                                    <td><?php echo $row['user_phone'];?></td>
                                </tr>
                                <tr>
                                	<td>Address</td>
                                    <td>:</td>
                                    <td>Dhaka, Bangladesh.</td>
                                </tr>
                                <tr>
                                	<td>Registration Time</td>
                                    <td>:</td>
                                    <td>29.04.2017 10:40:15</td>
                                </tr>
                            </table>
                          </div>
                          <div class="col-md-2">
                          </div>
                      </div>
                      <div class="panel-footer">
                        <div class="col-md-4">
                            <a href="#" class="btn btn-sm btn-primary">PDF</a>
                            <a href="#" class="btn btn-sm btn-success">PRINT</a>
                        </div>
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4 text-right">

                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                </div><!--col-md-12 end-->
            </div><!--admin-part end-->
         </div><!--row end-->
    </div><!--container-fluid end-->
   <?php get_footer();?>
