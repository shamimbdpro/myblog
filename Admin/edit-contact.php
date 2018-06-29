<?php
  $id=$_GET['contact'];
  require_once('function/functions.php');
    needLogged();
     if(isset($_POST['update'])){
    $name=$_POST['name'];
    $email= $_POST['email'];
    $contact_subject= $_POST['subject'];
    $message= $_POST['message'];

 $update = "UPDATE  contact SET contact_name='$name',contact_email='$email',contact_subject='$contact_subject',contact_message=' $message' WHERE contact_id='$id' ";
  if (mysqli_query($conn, $update)) {
    $msg='Data inserted Sucessfully';
  } else {
    echo "Error: " . $update . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);

  };

	$sql = "SELECT contact_name,contact_email,contact_subject,contact_message FROM  contact WHERE contact_id='$id'";
	$result = mysqli_query($conn, $sql);
	 $row = mysqli_fetch_assoc($result);
  get_header();
  get_sidebar();
  get_breadcum();
?>                <div class="col-md-12">
                	<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                Update Information
                             </div>
                             <div class="col-md-3 text-right">
                             	<a href="contact.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All contact</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
					     <h5 style="color:green;text-align:center"><?php if(isset($msg1)){echo $msg1;}?>
               </h5>
            <div class="panel-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Name</label>
                <div class="col-sm-8">
                  <input type="text" name="name" class="form-control" value="<?php echo $row['contact_name']?>">
                </div>
              </div>
            </div>
               <div class="panel-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-8">
                  <input type="email" name="email" class="form-control" value="<?php echo $row['contact_email']?>">
                </div>
              </div>
            </div>
                 <div class="panel-body">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Subject</label>
                <div class="col-sm-8">
                  <input type="text" name="subject" class="form-control" value="<?php echo $row['contact_subject']?>">
                </div>
              </div>
            </div>
            <div class="panel-body">
                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Post Description</label>
                  <div class="col-sm-8">
                        <textarea id="editor1" class="form-control" name="message" placeholder="Add Body" ><?php echo $row['contact_message']?></textarea>
                </div>
                </div>
             </div>  
                 <div class="panel-footer text-center">
                    <button class="btn btn-sm btn-primary" name="update">UPDATE</button>
                   </div>
                    </div>
                    </form>
                </div><!--col-md-12 end-->
            </div><!--admin-part end-->
         </div><!--row end-->
    </div><!--container-fluid end-->
  <?php get_footer();?>
