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
                                All Contact Info
                             </div>
                             <div class="clearfix"></div> 
                        </div>
                      <div class="panel-body">
                          <table class="table table-responsive table-striped table-hover table_cus display" id="table_id">
                          		<thead class="table_head">
                            		<tr>
                                    	<th>Contact Id</th>
                                    	<th>Contact Name</th>
                                        <th>Contact Email</th>
                                        <th>Contact Subject</th>
                                        <th>Contact Message</th>
                                        <th>Manage</th>
                                    </tr>
                            	</thead>
                                <tbody>
								  <?php
						    $sql = "SELECT * FROM  contact ORDER BY contact_id DESC";
	                $result = mysqli_query($conn, $sql);
							while($row = mysqli_fetch_assoc($result)) {
                
                ?>
								<tr>
								    <td><?php echo $row['contact_id']?></td>
								    <td><?php echo $row['contact_name']?></td>
                     <td><?php echo $row['contact_email']?></td>
								    <td><?php echo $row['contact_subject']?></td>
								    <td><?php echo substr($row['contact_message'],0,20)?>...</td>
                    	<td>
										<a href="view-contact.php?contact=<?php echo $row['contact_id']?>"><i class="fa fa-plus-square fa-lg"></i></a>
                    <a href="repalay-contact.php?contact=<?php echo $row['contact_id']?>"><i class="fa fa-reply"></i></a>
										<a href="edit-contact.php?contact=<?php echo $row['contact_id']?>"><i class="fa fa-pencil-square fa-lg"></i></a>
										<a href="delete.contact.php?contact=<?php echo $row['contact_id']?>"><i class="fa fa-trash fa-lg"></i></a>
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
