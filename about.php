<?php 
 require_once('functions/function.php');
  get_header();

?>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8 gellery">
<br /> 
<?php 
    $sql = "SELECT * FROM options"; 
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result) ?>
                 <?php  echo $row['about'];?>
        </div>
<?php 
  get_sidebar();
   include 'config.php';
   $sql = "SELECT * FROM options";
    $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    ?>
 <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white"><?php echo $row['copyright']?></p>
      </div>
      <!-- /.container -->
    </footer>
