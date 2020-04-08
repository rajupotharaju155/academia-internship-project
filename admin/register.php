<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['admin']) || $_SESSION['admin'] == ''){
        echo "<script>Login First!!</script>";
        header("Location: login.php");
    }   
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <script type="text/javascript">



      function validateForm(){

        var user = document.adminForm.username;
        var email = document.adminForm.email;
        var pass = document.adminForm.password;
        var confirm = document.adminForm.confirmpassword;

        if (user.value == ''){
          alert("Please fill out all the fields");
          return false;
        }

        if(email.value == ''){
          alert("Please enter your email");
          email.focus();
          return false;
        }

        if(pass.value == ''){
          alert("Enter password");
          pass.focus();
          return false;
        }

        if(pass.value != confirm.value){
          alert("Password doesn't match");
          pass.focus();
          return false;
        }else{
          return true;
        }

      }

    </script>
  </head>
  <body>




    <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>


           <div class="modal-body">
             <form action="process.php" method="POST" name="adminForm" onsubmit="return validateForm()">
               <div class="form-group">
                   <label> Username </label>
                   <input type="text" name="username" class="form-control" placeholder="Enter Username">
               </div>
               <div class="form-group">
                   <label>Email</label>
                   <input type="email" name="email" class="form-control" placeholder="Enter Email">
               </div>
               <div class="form-group">
                   <label>Password</label>
                   <input type="password" name="password" class="form-control" placeholder="Enter Password">
               </div>
               <div class="form-group">
                   <label>Confirm Password</label>
                   <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
               </div>

           </div>
           <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>


            <input type="submit" class="btn btn-primary" name="submit" value="Save">
      

           </div>
         </form>

       </div>
     </div>
    </div>


    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary" style="display:inline-block; width:80%;">Admin Profile
        </h6>

        <button align="right" type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
          Add Admin Profile
        </button>
      </div>

      <div class="card-body">

        <div class="table-responsive">

          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th> ID </th>
                <th> Username </th>
                <th>Email </th>
                <th>DELETE </th>
              </tr>
            </thead>
            <tbody>

              <?php
                include "connect.php";

                $result = $conn->query("select * from sign");

                while($row = $result->fetch_assoc()) :

                ?>
                <?php if($row['id'] != 2): ?>
              <tr>
                <td> <?php echo $row['id']; ?></td>
                <td> <?php echo $row['username']; ?></td>
                <td> <?php echo $row['email']; ?></td>
                <td>
                      <a href="process.php?del=<?php echo $row['id']; ?>" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </td>
              </tr>
            <?php endif; ?>
            <?php endwhile; ?>
            </tbody>
          </table>

        </div>
      </div>
    </div>

    </div>

  </body>
</html>
