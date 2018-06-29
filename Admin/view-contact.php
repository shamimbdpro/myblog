<?php
  $id=$_GET['contact'];
  require_once('function/functions.php');

  	$sql = "SELECT * FROM  contact WHERE contact_id='$id'";
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
                             	<a href="repalay-contact.php?contact" class="btn btn-sm btn btn-primary"><i class="fa fa-reply"></i> Repay</a>
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
                                    <td><?php echo $row['contact_name'];?></td>
                                </tr>
                            	<tr>
                                	<td>Email</td>
                                    <td>:</td>
                                    <td><?php echo $row['contact_email'];?></td>
                                </tr>
                                <tr>
                                	<td>Subject</td>
                                    <td>:</td>
                                    <td><?php echo $row['contact_subject'];?></td>
                                </tr>
                                <tr>
                                	<td>Message</td>
                                    <td>:</td>
                                    <td><?php echo $row['contact_message'];?></td>
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
