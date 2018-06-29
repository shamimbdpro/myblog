<?php 
 require_once('functions/function.php');
  get_header();
  $date= new formate;
?>
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
          <br>
            <?php 
         $record_per_page=1;
         if(isset($_GET['page'])){
          $page_number=$_GET['page'];
         }else{
           $page_number=1;
         }
         ?>
         <?php
        $start_form=($page_number-1) *  $record_per_page;
                $sql = "SELECT * FROM blog_posts NATURAL JOIN post_catergorys LIMIT $start_form, $record_per_page ";
                $result = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_assoc($result)){ ?>
                
                  <!-- Blog Post -->
                  <div class="card mb-4">
                    <img class="card-img-top" style="height: 300px" src="Admin/uploads/post/<?php echo $row['post_image']?>" alt=" Post Image">
                    <div class="card-body">
                      <h2 class="card-title"><?php echo $row['post_title']?></h2>
                      <p class="card-text"><?php echo substr($row['post_details'],4,250)?></p>
                      <a href="single.php?id=<?php echo $row['post_id']?>" class="btn btn-primary">Read More &rarr;</a>
                         <?php if(isset($_SESSION['user_id'])){ ?>
                        <a href="admin/edit-post.php?id=<?php echo $row['post_id']?>" class="btn btn-primary">Edit &rarr;</a>
                      <a href="admin/delete-post.php?id=<?php echo $row['post_id']?>" class="btn btn-danger">Delete &rarr;</a>
                       <?php }
                        ?>
                    </div>
                    <div class="card-footer text-muted">
                      Posted on <?php echo $date->formDate($row['date'])?>  by 
                      <a href="single.html"><?php echo $row['author']?></a> Cetegory <a href="#"><?php echo $row['category_names']?></a>
                    </div>
                  </div>
              <?php  }
            ?>
      
      <?PHP 
      $pagi = "SELECT COUNT(*) AS total FROM blog_posts";
      $page_reuslt = mysqli_query($conn, $pagi);
      $total = mysqli_fetch_object($page_reuslt)->total;
      $pages =number_format($total / $record_per_page);
      
      ?>
          <!-- Pagination -->
       <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="?page=1">First</a></li>
          <?php 
           for ($a=1; $a <= $pages ; $a++) {   ?>
            <li class="page-item <?php echo(isset($_GET['page'] ) && $_GET['page']==$a) ? 'active' : '' ?>">
               <a class="page-link" href="?page=<?php echo $a?>">
                    <?php  echo $a;?>
              </a>

             </li>
       <?php    }
          ?>
          
          <li class="page-item"><a class="page-link" href="?page=<?php echo  $pages;?>">Last</a></li>
        </ul>
      </nav>
        </div>
<?php 

 get_sidebar();
 get_footer();

?>
   