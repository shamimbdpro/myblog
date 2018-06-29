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
                             	<a href="add-post.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> Add Post</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
                          <table class="table table-responsive table-striped table-hover table_cus">
                          		<thead class="table_head">
                            		<tr>
                                    	<th>Id</th>
                                    	<th>Title</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Photo</th>
                                        <th>Manage</th>
                                    </tr>
                            	</thead>
                                <tbody>
								  <?php
						    $sql = "SELECT * FROM  blog_posts NATURAL JOIN post_catergorys ORDER BY post_id DESC";
	                           $result = mysqli_query($conn, $sql);
                 $post_count=0;
							while($row = mysqli_fetch_assoc($result)) { 
               $post_count++;
             ?>
								<tr>
								    <td><?php echo $post_count;?></td>
								    <td><?php echo $row['post_title']?></td>
								    <td>...<?php echo substr($row['post_details'],1,20)?></td>
                     <td><?php echo $row['category_names']?></td>
                     <td>
                     <?php
                       if ($row['post_image']!='') { ?>
                         <img height="50" src="uploads/post/<?php echo $row['post_image']?>">
                   <?php    }else{
                        ?>
                        <img height="50" src='uploads/avatar.png' alt="avarter">
                    <?php   }
                     ?>

                    </td>
                    	<td>
										<a href="../single.php?id=<?php echo $row['post_id']?>" target='__'><i class="fa fa-plus-square fa-lg"></i></a>
										<a href="edit-post.php?id=<?php echo $row['post_id']?>"><i class="fa fa-pencil-square fa-lg"></i></a>
										<a href="delete-post.php?id=<?php echo $row['post_id']?>"><i class="fa fa-trash fa-lg"></i></a>
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
                        	<nav aria-label="Page navigation">
                              <ul class="pagination pagina_cus">
                                <li>
                                  <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                  </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                  <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                  </a>
                                </li>
                              </ul>
                            </nav>
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
