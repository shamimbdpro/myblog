<?php
error_reporting(0);
  require_once('function/functions.php');
  needLogged();
  if($_SESSION['role_id']==1){
  get_header();
  get_sidebar();
  get_breadcum();

// sql to delete a record
  if(isset($_GET['id'])){
    $id=$_GET['id'];
     $img = "SELECT * FROM  gellery WHERE gellery_id='$id'";
      $showimg = mysqli_query($conn, $img);
       while($image1 = mysqli_fetch_assoc($showimg)) { 
        $del_img=$image1['gellery_image'];
        unlink('uploads/gellery/'.$del_img);
   }

$delete = "DELETE FROM  gellery WHERE gellery_id='$id'";
if (mysqli_query($conn, $delete)) {
    $msg="Image deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}


}
  ?>
                <div class="col-md-12">
                   <h5 style="text-align:center;color:green"><?php if(isset($msg)){echo $msg;}?></h5>
                	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                All Information View
                             </div>
                             <div class="col-md-3 text-right">
                             	<a href="gellery.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> Add Gellery</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
                          <table class="table table-responsive table-striped table-hover table_cus display" id="table_id">
                          		<thead class="table_head">
                            		<tr>
                                    	<th>Id</th>
                             
                                        <th>Photo</th>
                                        <th>Manage</th>
                                    </tr>
                            	</thead>
                                <tbody>
								  <?php
						    $sql = "SELECT * FROM  gellery ORDER BY gellery_id DESC";
	                           $result = mysqli_query($conn, $sql);
                  $gellery_count=0;
							while($row = mysqli_fetch_assoc($result)) { 
                 $gellery_count++;
                ?>
								<tr>
								    <td><?php echo $gellery_count;?></td>
								      <td>
                     <?php
                       if ($row['gellery_image']!='') { ?>
                         <img height="50" src="uploads/gellery/<?php echo $row['gellery_image']?>">
                   <?php    }else{
                        ?>
                        <img height="50" src='uploads/avatar.png' alt="avarter">
                    <?php   }
                     ?>

                    </td>
                    	<td>
									
										<a href="?id=<?php echo $row['gellery_id']?>"><i class="fa fa-trash fa-lg"></i></a>
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
