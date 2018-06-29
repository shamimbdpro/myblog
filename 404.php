<?php 
 require_once('functions/function.php');
  get_header();

?>
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8 found">
              <div class="info"> 
			   <h2>opps! we could not find your result</h2>
			  <p>404</p>
			   </div>
        </div>

	<style type="text/css"> 
	 .found{
		 background:#DDD;
		 text-align:center;
		
	 }
	 .info{
		 padding-top:20%
	 }
	 .info p{
		 font-size:80px;
		 color:red;
		 font-weight:bold
	 }
	</style>
<?php 

 get_sidebar();
 get_footer();

?>
   