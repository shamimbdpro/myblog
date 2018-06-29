    
<?php 
 require_once('../includes/config.php');
   $sql = "SELECT * FROM  contact";
     $result = mysqli_query($conn, $sql);
     $rowcount=mysqli_num_rows($result);
?>
    <div class="container-fluid content_full">
        <div class="row">
            <div class="col-md-2 sidebar pd0">
            	<div class="side_user">
                	<img class="img-responsive" src="uploads/<?php echo $_SESSION['user_photo']?>"/>
                    <h4><?php echo $_SESSION['username'] ?></h4>
                    <span><i class="fa fa-circle"></i> Online</span>
                </div>
                <h2>MAIN NAVIGATION</h2>
                <ul>
                	<li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                     <?php
                  if($_SESSION['role_id']==1){  ?>
                      <li><a href="all-user.php"><i class="fa fa-user-circle"></i> User</a></li>
                <?php  }
                     ?>

                    <li><a href="add-post.php"><i class="fa fa-plus-square"></i> Blog Post</a>
                    </li>
                    <li><a href="post-category.php"><i class="fa fa-plus-square"></i> Post Category</a>
                    </li>
                    <li><a href="contact.php"><i class="fa fa-envelope-o"></i> Message<span style="float:right;color:#FFF;padding-right:10px"><?php echo $rowcount;?></span></a></li>
                    <li><a href="../index.php" target="__blank"><i class="fa fa-gamepad"></i> view site</a></li>
                    <li><a href="option.php"><i class="fa fa-cog"></i> Option</a></li>
                    <li><a href="gellery.php"><i class="fa fa-image"></i> Gallery</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
                </ul>
            </div>

			<!--sidebar end-->
