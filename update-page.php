<?php
   include('header.php');
   include('connection.php');
 ?>
<!-- data retrieve php file -->

      <div class="container">
        <h2 class="text-center" style="color:skyblue;"> Database View</h2>

         <?php if(@$_GET['update']) {?>
          <div class="alert alert-success alert-dismissible">
            <a href="update-page.php" class="close">&times;</a>
            <strong>Success!</strong> Update Successfull!
          </div>
          <?php }?>

           <?php if(@$_GET['delete']) {?>
          <div class="alert alert-success alert-dismissible">
            <a href="update-page.php" class="close">&times;</a>
            <strong>Success!</strong> Delete Successfully!
          </div>
          <?php }?>



      <table class="table table-condensed">
        <thead>
          <tr>
            <th>Sr.No</th>
            <th>f_name</th>
            <th>l_name</th>
            <th>email</th>
            <th>contact</th>
            <th>s_address</th>
            <th>DOB</th>
            <th>gender</th>
            <th>Interest</th>
            <th>comment</th>
            <th>date_time</th>
          </tr>
        </thead>
        <tbody>

          <?php

              $query = "SELECT * FROM table1 order by id desc";
              $sno = 1;
              $sql = mysqli_query($conn,$query);
              while($row = mysqli_fetch_array($sql))
              {

          ?>
          <tr>
            <td><?php echo $sno;?></td>
            <td><?php echo $row['f_name'];?></td>
            <td><?php echo $row['l_name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['contact'];?></td>
            <td><?php echo $row['s_address'];?></td>
            <td><?php echo $row['DOB'];?></td>
            <td><?php echo $row['gender'];?></td>
            <td><?php echo $row['interest'];?></td>
            <td><?php echo $row['comment'];?></td>
            <td><?php echo $row['date_time'];?></td>
            <td><a href="update.php?id=<?php echo $row['id'];?>"><button type="button" name="edit" class="btn btn-info">Edit</button></a></td>
            <td><a href="delete.php?id=<?php echo $row['id'];?>"><button type="button" name="delete" class="btn btn-danger">Delete</button></a></td>
          </tr>
          <?php

              $sno = $sno+1;
            }
          ?>
        </tbody>
      </table>
    </div>

<?php
    include('footer.php')
  ?>
