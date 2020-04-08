<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['admin']) || $_SESSION['admin'] == ''){
        echo "<script>Login First!!</script>";
        header("Location: login.php");
    }   
?>

        <!-- Begin Page Content -->
        <div class="container-fluid" id="main">

<!--
           Page Heading
          <h1 class="h3 mb-2 text-gray-800">Details</h1>
          <br>
-->
         <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Student Details</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email id</th>

                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email id</th>
                      
                    </tr>
                  </tfoot>
                  <tbody>
                   <?php
                      include "connect.php";
$sql = "select * FROM  student_user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$FirstName = $row["fname"];
		$LastName = $row["lname"];
		$EmailID = $row["email"];


        echo "<tr>
        <td>$FirstName</td>
        <td>$LastName</td>
		 <td>$EmailID</td>


      </tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
	  ?>



                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>

        <!-- /.container-fluid -->
