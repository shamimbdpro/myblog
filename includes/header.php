<?php 
 session_start();
  require_once('functions/function.php');
  include_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php 
  $sql = "SELECT * FROM options";
    $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    ?>
    <title><?php echo $row['page_title']?></title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
	<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" media="all" />
      <link rel="stylesheet" href="comments/style.css">
    <link href="css/blog-home.css" rel="stylesheet"/>
    <link href="css/custom-style" rel="stylesheet"/>
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php"><?php echo $row['logo']?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gellery.php">Gellery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>  
			<li class="nav-item">
                <?php if(empty($_SESSION['user_id'])){ ?>
              <a class="nav-link" href="Admin/login.php">Login</a>
     <?php       }else{ ?>

                     <a class="nav-link" href="Admin/index.php">Deshboard</a>
            <?php  }
                ?>
            </li>
          </ul>
        </div>
      </div>
    </nav>
