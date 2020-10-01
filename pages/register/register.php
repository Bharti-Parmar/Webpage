 <?php
    include('../connection.php');
  ?>
<!-- data registration php file -->
  <?php

    if(isset($_POST['submit']))  {
      $f_name=$_POST['f_name'];
      $l_name=$_POST['l_name'];
      $email=$_POST['email'];
      $contact=$_POST['contact'];
      $s_address=$_POST['s_address'];
      $DOB=$_POST['DOB'];
      $gender=$_POST['gender'];
      $interest=$_POST['select'];
      $comment=$_POST['comment'];
    	$date=date('Y/m/d H:i:s');

    	$query = "INSERT INTO table1(f_name,l_name,email,contact,s_address,DOB,gender,interest,comment,date_time)VALUES('".$f_name."','".$l_name."','".$email."','".$contact."','".$s_address."','".$DOB."','".$gender."','".$interest."','".$comment."','".$date."')";
    	mysqli_query($conn,$query);
    	header('location:registration_form.php?save=true');
    }
  ?>

  <?php
     include('../../footer.php');
   ?>
