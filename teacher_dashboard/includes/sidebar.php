

//<?php
  //  include('../processes/connection.php');
//$result = mysqli_query($con, "select title from courses where email = '".$_SESSION['instructor']."' ");
  //  while($row = mysqli_fetch_array($result)){
    //  $title = $row['title'];
        
        
        
        
      

     
//    }
  //  ?>



<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  nav li a::after{
  border-bottom-width: 1px solid red
  }
  </style>
</head>
<div class="sidebar" role="navigation">
    <div class="navbar-collapse">
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">


          <ul class="nav" id="side-menu">

            <li>
              <a href="dashboard.php" ><i class="fa fa-home nav_icon"></i>Dashboard</a>
            </li>


            <li>
              <a href="manage-courses.php"> <i class="fa fa-book nav_icon"></i> Courses <span class="fa arrow"></span> </a>
              <ul class="nav nav-second-level collapse">
              <li>
              <a href="manage-courses.php"> <i class="fa fa-arrow-circle-right nav_icon"></i> Manage Courses </a>
                </li>
                <li>
                 <a href="add-courses.php"><i class="fa fa-arrow-circle-right nav_icon"></i> Add Courses</a>
                </li>
                
              </ul>
              <!-- /nav-second-level-->
            </li>
              
              
              
<!--
               <li>
                   <a href="#">
              <i class="fa fa-users nav_icon"></i>Student List</a><span class="fa arrow"></span> </a>
              <ul class="nav nav-second-level collapse">
                 
                //<li>  
                                        
                    
<a href="listcourses.php"> <i class="fa fa-arrow-circle-right nav_icon"></i><?php echo $title ?> </a>
               
                  </li>
             
                
                
              </ul>
-->
              <!-- /nav-second-level-->
            
              
              
              
              
              
              
              
              
              
               <li>
              <a href="showcourses.php" class="chart-nav"><i class="fa fa-users nav_icon"></i>Your Courses</a>
                             

            </li>
              
              
              
              
              
              

<!--
            <li>
              <a href="student.php" class="chart-nav"><i class="fa fa-users nav_icon"></i>Student List</a>
                             

            </li>
              

             
-->

          

        

          </ul>
          <!-- //sidebar-collapse -->
        </nav>
      </div>
    </div>