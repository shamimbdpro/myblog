 <?php
  $id = $_GET['id'];
 require_once('functions/function.php');
 require_once 'comments/php/functions.php';
 $date= new formate;
    $sql = "SELECT * FROM  blog_posts WHERE post_id='$id'";
  $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    get_header();
?>
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-8">
          <!-- Title -->
          <h1 class="mt-4 all_comment"><?php echo $row['post_title']?></h1>
          <!-- Date/Time -->
          <p> Posted on <?php echo $date->formDate($row['date'])?> by
            <a href="single.html"><?php echo $row['author']?></a></p>
          <!-- Preview Image -->
          <img class="img-fluid rounded" src="Admin/uploads/post/<?php echo $row['post_image']?>" alt="">
          <!-- Post Content -->
           <?php echo $row['post_details']?>
		<script src="comments/js/global.js"></script>
			<?php 
				require_once 'comments/php/check_com.php';
  get_total();
  get_comments();
			?>
        </div>

       <?php 
 get_sidebar();
 get_footer();
?>