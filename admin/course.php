
<?php
error_reporting(0);
    include "connect.php";
    include "check.php";
    
    if(!isset($_SESSION['admin']) || $_SESSION['admin'] == ''){
        echo "<script>Login First!!</script>";
        header("Location: login.php");
    }

?>
<html>

<head>
  <title></title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <script src="course.js" type="text/javascript"></script>
</head>

<body>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Course Details</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
                    <tr>
                      <th>CourseID</th>
                  <th>Cousre Title</th>
                  <th>Course Description</th>
                <th>Start Date</th>
               <th>End Date</th>
                <th>Fees</th>
            <th>Status</th>
            <th>Accept</th>
            <th>Reject</th>

                  </thead>
                  <tfoot>
                    <tr>
                     <th>CourseID</th>
               <th>Cousre Title</th>
                 <th>Course Description</th>
                 <th>Start Date</th>
             <th>End Date</th>
               <th>Fees</th>
        <th>Status</th>
        <th>Accept</th>
          <th>Reject</th>



                    </tr>
                  </tfoot>
          <tbody id="course">
            <?php
            include "connect.php";
            $sql = "select * FROM courses";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  $CourseId = $row["id"];
              		$CourseTitle = $row["title"];
              		$CourseDescription = $row["description"];
              		$StartDate = $row["start_date"];
              		$EndDate = $row["end_date"];
              		$Fees = $row["price"];
              		$Status = $row["status"];
                if($Status == 'pending'){
                    echo "<tr>
                    <td>$CourseId</td>
                    <td>$CourseTitle</td>
            		 <td>$CourseDescription</td>
            		 <td>$StartDate</td>
            		  <td>$EndDate</td>
            		  <td>$Fees</td>
            		   <td>$Status</td>
            		   <td><a href='process.php?accept=$CourseId' class='btn btn-primary btn-sm'>Accept</a></td>
                       <td><a href='process.php?delete=$CourseId' class='btn btn-primary btn-sm'>Reject</a></td>
                  </tr>";
                }else{
                  $empty = true;
                }
                }
            }

            if($empty){
              echo "<tr><td colspan='9'><center>No data available</center></td></tr>";
            }

            	  ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="vendor\datatables\dataTables.bootstrap4.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
