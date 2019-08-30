<!-- header and connection file include -->
<?php
	  include('header.php');
		include('connection.php');
?>

								<!--- edit page ---------------------------------------------->
<body>

 <?php

          $id=@$_GET['id'];
          $query="Select * from table1 where id='".$id."'";

          $sql=mysqli_query($conn,$query);
          $edit=mysqli_fetch_array($sql);
      ?>


	<div class="container">
				<h1 class="text-center">Edit Page </h1>
				<form class="container" method="POST" action="edit.php">
					<input type="hidden" name="form_id" value="<?php echo $edit['0'];?>">
	<!-- Name and Email -->
					<div class="row">
						<div class="col-sm-4 col-12">
							 <input type="text" class="form-control" id="f_name" name="f_name" value="<?php echo $edit['f_name'];?>" required><br>
						</div>
						<div class="col-sm-4 col-12">
							<input type="text" class="form-control" id="l_name" name="l_name" value="<?php echo $edit['l_name'];?>" required><br>
						</div>
						<div class="col-sm-4 col-12">
							 <input type="email" class="form-control" id="email" name="email" value="<?php echo $edit['email'];?>" required><br>
						</div>
					</div>
	<!-- contact and area code -->
					<div class="row">
						<div class="col-sm-6 col-12">
							<input type="text" class="form-control" id="s_address" name="s_address" value="<?php echo $edit['s_address'];?>" required><br>
						</div>
						<div class="col-sm-6 col-12">
							<input type="text" class="form-control" id="contact" name="contact" value="<?php echo $edit['contact'];?>" required><br>
						</div>
					</div>
	<!-- DOB and gender -->
					<div class="row row-sm">
						<div class="col-sm-6 col-12">
							<div class="row">
							   <label class="form-control-label col-lg-3">Birth Date:</label>
							   <input type="date" class="form-control col-lg-8" value="<?php echo $edit['DOB'];?>" name="DOB">
							</div><br>
						</div>
					</div>
	<!-- comment section -->
					<div class="row">
						<div class="col-sm-12 col-12">
							 <input type="text" class="form-control" id="comment" name="comment" value="<?php echo $edit['comment'];?>"><br>
						</div>
					</div>
	<!-- submit form -->
					<center>
					  <a href="edit.php?id=<?php echo $row['id'];?>"><button type="submit" class="btn btn-primary" name="update" style="margin-bottom:40px;">Update</button></a>
					 </center>
				</form>
		</div>
	</div>

</body>


<?php include('footer.php');
?>
