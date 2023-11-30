
   <?php include('partials/menu.php') ?>
        <!-- menu ends here -->
            <!-- main content goes here -->
     <div class="main-content">
        <div class="wrapper">
            <h1>Manage Admin</h1>  
            <?php
                if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];     //Displaying session message
                        unset($_SESSION['add']);  //removing session message
                    }
                if(isset($_SESSION['delete']))
                {
                  echo $_SESSION['delete'];
                  unset($_SESSION['delete']);
                }
                if(isset($_SESSION['update']))
                {
                  echo $_SESSION['update'];
                  unset($_SESSION['update']);
                }
                if(isset($_SESSION['user-not-found']))
                {
                  echo $_SESSION['user-not-found'];
                  unset($_SESSION['user-not-found']);
                }
                if(isset($_SESSION['change-passwd']))
                {
                  echo $_SESSION['change-passwd'];
                  unset($_SESSION['change-passwd']);
                }
             


?>
<BR>

            <!--button to add admin --> 
           <a href="add-admin.php" style ="color:transparent"><button id = "link" type="button" class="btn btn-primary hovering" style = "background-color:#3a8878">Add Admin</button></a> 
            <table class="table">
                <br>
                <br>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    
    $sql = "Select * from user";
      $num = 1;
    $res = mysqli_query($conn, $sql);
    if($res == true)
    {
        $count = mysqli_num_rows($res);
        if($count >0)
        {
            while($rows=mysqli_fetch_assoc($res))
            {
                $id = $rows['ID'];
                $fname = $rows['firstname'];
                $lname = $rows['lastname'];
                $email = $rows['EMAIL'];
     ?>
                        <tr>
                     <th scope="row"><?php echo $num++;?></th>
                      <td><?php echo $fname;?></td>
                    <td><?php echo $lname;?></td>
                  <td><?php echo $email;?></td>
               
                     <td>
                     <a href = "update-admin.php?id=<?php echo $id?>"><button  type="button" class="btn btn-primary hovering">Update Admin</button></a>
                     <a href = "form/delete-admin.php?id=<?php echo $id?>"><button name = "delete"type="button" class="btn btn-primary hovering">Delete Admin</button></a>
                     <a href = "change-password.php?id=<?php echo $id?>"><button type="button" class="btn btn-primary hovering">Change Password</button></a>

                    </td>
    </tr>
                    <?php
                    

            }
        }
        else{

        }
    }
    ?>

  </tbody>
</table>
            </div>
        </div>
        <!-- main content ends here -->
    <!-- footer starts here -->
<?php include('partials/footer.php') ?>


