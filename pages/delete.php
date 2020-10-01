
<?php
require('connection.php');

/* delete page */
     if(!empty($_GET['id'])){
      $query="DELETE FROM table1 WHERE id= '".$_GET['id']."'";
			$result = mysqli_query($conn,$query);
			header("Location: update/update-page.php?delete=true");
     }
 ?>
