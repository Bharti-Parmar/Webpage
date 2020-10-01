<?php
	include('connection.php');

/* update file php code */
	if(isset($_POST['update']))
	{

    $id=$_POST['id'];
		$f_name=$_POST['f_name'];
		$l_name=$_POST['l_name'];
		$email=$_POST['email'];
		$contact=$_POST['contact'];
		$s_address=$_POST['s_address'];
		$DOB=$_POST['DOB'];
		$comment=$_POST['comment'];
		$date=date('Y/m/d H:i:s');

	echo	$query="UPDATE table1 SET f_name='".$f_name."',l_name='".$l_name."',email='".$email."',contact='".$contact."',s_address='".$s_address."',DOB='".$DOB."',comment='".$comment."',date_time='".$date."' WHERE id='".$id."'"; //exit;

		mysqli_query($conn,$query);
		header('location:update/update-page.php?update=true');

	}
?>
