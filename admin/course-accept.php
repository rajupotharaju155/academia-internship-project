
<?php
       error_reporting(0); 
    include "check.php";
   
    if(!isset($_SESSION['admin']) || $_SESSION['admin'] == ''){
        echo "<script>Login First!!</script>";
        header("Location: login.php");
    }
    include "connect.php";
    

?>
<html>
    <head>
        <title></title>

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
		        <th>Button</th>

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
		        <th>Button</th>

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
     if($Status == 'live'){
              echo "<tr>
              <td>$CourseId</td>
              <td>$CourseTitle</td>
      		 <td>$CourseDescription</td>
      		 <td>$StartDate</td>
      		  <td>$EndDate</td>
      		  <td>$Fees</td>
      		   <td>$Status</td>
      		   <td><a class='btn btn-warning' href='process.php?delete=$CourseId'>Reject</a></td>
            </tr>";
          }
    }
} else {
    echo "No data available";
}

	  ?>


                  </tbody>
                </table>
              </div>
            </div>
          </div>

</body>
</html>
