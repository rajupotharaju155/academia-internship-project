<?php
session_start();
error_reporting(0);
include('../processes/connection.php');
  ?>
<html>
<head>
<title> Your  Courses </title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

<style>
tr td img{
	width: 60px;
	height: 60px;
}
.main-page{
	border: 0px solid red;
	
	width: 100%;
	overflow-y: auto;	
	overflow-x: auto;
}
.tables{
	position: relative;
	top: 0px;
	border: 0px solid;
	height: 90% !important ;
	overflow-y: auto !important;
}
.table-responsive{
	
	overflow-y: auto !important;
}
table{
	border: 0px solid yellow !important;
	position: relative;
}
</style>
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		 <?php include_once('includes/sidebar.php');?>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		 <?php include_once('includes/header.php');?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">

						
						
						
							<?php
                                 $please=$_SESSION['instructor'];
                               $course = $_GET['cour_title'];
                                $sql =  "SELECT fname,lname,email,date_of_reg FROM student_user WHERE id  IN (SELECT student_id FROM joined_courses WHERE course_id IN(SELECT id FROM courses  WHERE title ='$course' and teacher_name='$please'))";  
                                $result = mysqli_query($con, $sql);
							     
                                
							?>
                               
						
						
						
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
                                             <th>Registration Date</th>  

                                        </tr>
                         <?php
                         while($row = mysqli_fetch_array($result))  
                         {  
                            echo '  
                           <tr>  
                             <td>'.$row["fname"].'</td>  
                             <td>'.$row["lname"].'</td>  
                             <td>'.$row["email"].'</td>  
                             <td>'.$row["date_of_reg"].'</td>  

                           </tr>  
                            ';  
                         }

                         ?>
                        </table>
                        <br />
       
                       </div>  
                      </div>  

						
						
		<!--footer-->
		
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
		<br><br><br><br><br><br><br><br>
		 <?php include_once('includes/footer.php');?>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js"> </script>
</body>
</html>