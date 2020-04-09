<?php
session_start();
error_reporting(0);
include('../processes/connection.php');

$course = $_GET['cour_title'];
//$connect = mysqli_connect("localhost", "root", "", "project");
$please=$_SESSION['instructor'];

$sql =  "SELECT fname,lname,email FROM student_user WHERE id  IN (SELECT student_id FROM joined_courses WHERE course_id IN(SELECT id FROM courses  WHERE title ='$course' and teacher_name='$please'))";  
$result = mysqli_query($con, $sql);
?>
<html>  
 <head>  
  <title>Exporting  Students Details </title>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  
 <body>  
  <div class="container">  
   <br />  
   <br />  
   <br />  
   <div class="table-responsive">  
    <h2 align="center"> STUDENT DETAILS  </h2><br /> 
    <table class="table table-bordered">
     <tr>  
                         <th>First name </th>  
                         <th>Last name</th>  
                         <th>Email</th>  
      
                    </tr>
     <?php
     while($row = mysqli_fetch_array($result))  
     {  
        echo '  
       <tr>  
         <td>'.$row["fname"].'</td>  
         <td>'.$row["lname"].'</td>  
         <td>'.$row["email"].'</td>  
        
       </tr>  
        ';  
     }
       
     ?>
    </table>
    <br />
<!--
    <form method="post" action="export.php?cour_title=<?php echo $row['title'];?>">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
-->
       
<!--
       <a href="student.php?cour_title=<?php echo $row['title'];?>">
       
-->
       
   </div>  
  </div>  
 </body>  
</html>

