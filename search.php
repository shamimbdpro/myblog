<?php 
 require_once('functions/function.php');
  get_header();
  $date= new formate;
     if(!isset($_GET['search']) || $_GET['search']==null){
       header('location:404.php');
     }else{
      $search=$_GET['search'];
    }
?>
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
          <br>
          <!-- search resutl -->
           <p>Your Search Result By <ins><?php echo $search?></ins></p>
         <?php
                $sql = "SELECT * FROM blog_posts NATURAL JOIN post_catergorys WHERE post_title LIKE '%$search%' or post_details LIKE '%$search%' or category_names LIKE '%$search%'";
                $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){ ?>
                   <!-- Blog Post -->
                  
                  <div class="card mb-4">
                    <img class="card-img-top" style="height: 300px" src="Admin/uploads/post/<?php echo $row['post_image']?>" alt="Card image cap">
                    <div class="card-body">
                      <h2 class="card-title"><?php echo $row['post_title']?></h2>
                      <p class="card-text"><?php echo substr($row['post_details'],4,250)?></p>
                      <a href="single.php?id=<?php echo $row['post_id']?>" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                      Posted on <?php echo $date->formDate($row['date'])?>  by 
                      <a href="single.html"><?php echo $row['author']?></a> Cetegory <a href="#"><?php echo $row['category_names']?></a>
                    </div>
                  </div>
              <?php  }
               }else{
                header('location:404.php');
               }
              ?>
           
        </div>
<?php 

 get_sidebar();
 get_footer();

?>
   