
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <form action="search.php" method="get">
              <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="Search for..." required>
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="submit">Go!</button>
                </span>
              </div>
              </form>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12">
                  <ul class="cat_list list-unstyled">
                    <?php 
                    $cat_list= "SELECT * FROM post_catergorys";
                    global $conn;
                    $cat_resut=mysqli_query($conn,$cat_list);
                    while ($cat_row=mysqli_fetch_assoc($cat_resut)) { ?>
                       <div class="col-md-6" style="float:left">
                          <li>
                      <a href="posts.php?category=<?php echo $cat_row['category_id']?>"><?php echo $cat_row['category_names'];?></a>
                    </li>
                       </div>
                  <?php  }
                    ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->