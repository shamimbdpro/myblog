<?php 
 require_once('functions/function.php');
  get_header();
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email= $_POST['email'];
    $contact_subject= $_POST['subject'];
    $message= $_POST['message'];
    // vaidation
     if(empty($name)){
     $name_error = "<span style='color:red;font-size:12px'>Name is required *</span>";
     }elseif(empty($email)){
     $email_error = "<span style='color:red;font-size:12px'>Email is required *</span>"; 
     }elseif(empty($contact_subject)){
      $subject_error = "<span style='color:red;font-size:12px'>Subject is required *</span>";
     }elseif(empty($message)){
      $body_error = "<span style='color:red;font-size:12px'>Message is required *</span>";
     }else{
      $sql = "INSERT INTO contact (contact_name,contact_email,contact_subject,contact_message) VALUES ('$name','$email','$contact_subject','$message')";
       if (mysqli_query($conn, $sql)) {
         $suc="Thanks for you Contact";
          header("Refresh:0");
       }
     }
  }

?>
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
  <form id='contact' action="" method="post">
       <?php 
          global $suc;
   echo '<p style="color:green;text-align:center;display:inherit">'.$suc.'</p>';
          ?>
    <h3>Quick Contact</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <?php global $name_error; echo $name_error?>
      <input placeholder="Your name *" type="text" name="name" tabindex="1" autofocus value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ''; ?>">
    </fieldset>
    <fieldset>
       <?php global $email_error; echo $email_error?>
      <input placeholder="Your Email Address *" type="email" name="email" tabindex="2" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>">
    </fieldset>
    <fieldset>
       <?php global $subject_error; echo $subject_error?>
      <input placeholder="Your Subject *" type="text" name='subject' tabindex="3" value="<?php echo isset($_POST["subject"]) ? $_POST["subject"] : ''; ?>">
    </fieldset>
    <fieldset>
       <?php global $body_error; echo $body_error?>
      <textarea placeholder="Type your Message Here...." tabindex="5" name="message"><?php echo isset($_POST["message"]) ? $_POST["message"] : ''; ?></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit"data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
 
</div>
<style> 
 @import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600);

* {
  margin:0;
  padding:0;
  box-sizing:border-box;
  -webkit-box-sizing:border-box;
  -moz-box-sizing:border-box;
  -webkit-font-smoothing:antialiased;
  -moz-font-smoothing:antialiased;
  -o-font-smoothing:antialiased;
  font-smoothing:antialiased;
  text-rendering:optimizeLegibility;
}



#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea, #contact button[type="submit"] { font:400 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }

#contact {
  background:#F9F9F9;
  padding:25px;
  margin:50px 0;
}

#contact h3 {
  color: #F96;
  display: block;
  font-size: 30px;
  font-weight: 400;
}

#contact h4 {
  margin:5px 0 15px;
  display:block;
  font-size:13px;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea {
  width:100%;
  border:1px solid #CCC;
  background:#FFF;
  margin:0 0 5px;
  padding:10px;
}

#contact input[type="text"]:hover, #contact input[type="email"]:hover, #contact input[type="tel"]:hover, #contact input[type="url"]:hover, #contact textarea:hover {
  -webkit-transition:border-color 0.3s ease-in-out;
  -moz-transition:border-color 0.3s ease-in-out;
  transition:border-color 0.3s ease-in-out;
  border:1px solid #AAA;
}

#contact textarea {
  height:150px;
  max-width:100%;
  resize:none;
}

#contact button[type="submit"] {
  cursor:pointer;
  width:100%;
  border:none;
  background:#0CF;
  color:#FFF;
  margin:0 0 5px;
  padding:10px;
  font-size:15px;
}

#contact button[type="submit"]:hover {
  background:#09C;
  -webkit-transition:background 0.3s ease-in-out;
  -moz-transition:background 0.3s ease-in-out;
  transition:background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active { box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.5); }

#contact input:focus, #contact textarea:focus {
  outline:0;
  border:1px solid #999;
}
::-webkit-input-placeholder {
 color:#888;
}
:-moz-placeholder {
 color:#888;
}
::-moz-placeholder {
 color:#888;
}
:-ms-input-placeholder {
 color:#888;
}

</style>
<?php
 get_sidebar();
 get_footer();

?>
   