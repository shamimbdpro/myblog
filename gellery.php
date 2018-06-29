<?php 
 require_once('functions/function.php');
  get_header();


  $date= new formate;
?>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8 gellery">
<br />
    <style type="text/css"> 
      .gellery img{
      width:33%;
      float:left;
      overflow:hidden;
      border:2px solid #ccc;
      margin-bottom:5px;    
      height: 180px  
    }
    </style>
    
<?php 
    $sql = "SELECT * FROM gellery"; 
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){ ?>
               <a href="Admin/uploads/gellery/<?php echo $row['gellery_image']?>" rel=" prettyPhoto['shamim']"><img src="Admin/uploads/gellery/<?php echo $row['gellery_image']?>" alt="prettyPhoto" /></a>
                 <?php  }
?>
    <script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('.gellery a').prettyPhoto() 
      });
    </script>
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
