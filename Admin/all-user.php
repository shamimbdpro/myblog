<?php
  require_once('function/functions.php');
  needLogged();
  if($_SESSION['role_id']==1){
  get_header();
  get_sidebar();
  get_breadcum();
  ?>
                <div class="col-md-12">
                	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                All Information View
                             </div>
                             <div class="col-md-3 text-right">
                             	<a href="register.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> Add User Information</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
                          <table class="table table-responsive table-striped table-hover table_cus display" id="table_id">
            		<thead class="table_head">
              		<tr>
                      	<th>Id</th>
                      	<th>Username</th>
                          <th>Phone</th>
                          <th>Email</th>
                          <th>stutus</th>
                          <th>Role</th>
                          <th>Photo</th>
                          <th>Manage</th>
                      </tr>
              	</thead>
            <tbody>
								  <?php
						    $sql = "SELECT * FROM  cit_users NATURAL JOIN cit_roles ORDER BY user_id DESC";
	           $result = mysqli_query($conn, $sql);
							while($row = mysqli_fetch_assoc($result)) { ?>
								<tr>
								    <td><?php echo $row['user_id']?></td>
								    <td><?php echo $row['username']?></td>
								    <td>...<?php echo substr($row['user_phone'],8,11)?></td>
								    <td><?php echo $row['user_email']?></td>
                    <?php  if(isset($_SESSION['user_id'])){ ?>
                      
                      <td><span><i style="color:green" class="fa fa-circle"></i> online</span></td>
                <?php    }else{ ?>
                      <td><span><i style="color:#000" class="fa fa-circle"></i> offline</span></td>
                <?php  } ?>
                      <td><?php echo $row['role_name']?></td>
                     <td>
                     <?php
                       if ($row['user_photo']!='') { ?>
                         <img height="50" src="uploads/users/<?php echo $row['user_photo']?>">
                   <?php    }else{
                        ?>
                        <img height="50" src='uploads/avatar.png' alt="avarter">
                    <?php   }
                     ?>

                    </td>
                    	<td>
										<a href="view-user-info.php?id=<?php echo $row['user_id']?>"><i class="fa fa-plus-square fa-lg"></i></a>
										<a href="edit-user.php?id=<?php echo $row['user_id']?>"><i class="fa fa-pencil-square fa-lg"></i></a>
										<a href="delete.php?id=<?php echo $row['user_id']?>"><i class="fa fa-trash fa-lg"></i></a>
									</td>
								</tr>
						<?php	}
								  ?>
             </tbody>
                          </table>
                      </div>
                      <div class="panel-footer">
                        <div class="col-md-4">
                        	<a href="#" class="btn btn-sm btn-warning">EXCEL</a>
                            <a href="#" class="btn btn-sm btn-primary">PDF</a>
                            <a href="#" class="btn btn-sm btn-danger">SVG</a>
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
   <?php get_footer();

}else{
  echo "You Have No Permission";
}
   ?>
