<?php
error_reporting(0);
include "connect.php";
require_once 'check.php';


$i = 0;


if(isset($_POST['submit'])){

  $user = mysqli_real_escape_string($conn, $_POST['username']);
  $email= mysqli_real_escape_string($conn,$_POST['email']);
  $passw = mysqli_real_escape_string($conn, $_POST['password']);
  $cpassw = mysqli_real_escape_string($conn, $_POST['confirmpassword']);

  $pass = password_hash($passw, PASSWORD_BCRYPT);
  $cpass = password_hash($cpassw, PASSWORD_BCRYPT);


  $emailquery = "select * from sign where email = '$email'";

  $query = $conn->query($emailquery);

  $emailcount = mysqli_num_rows($query);

  if($emailcount == 0){
    $insert = "insert into sign(username,email,password,cpassword) values('$user','$email','$pass','$cpass')";
    $result = $conn->query($insert);
    if($result){
    $_SESSION['message'] = "Admin added successfully";
    $_SESSION['msg-type'] = "info";

    header("Location: index.php");
  }else{
    $_SESSION['message'] = "Unsuccessful";
    $_SESSION['msg-type'] ="info";
  }
  }


  if($emailcount > 0){
    echo "<script>alert('Email already exists');</script>";
    echo "<script>location.href='index.php'</script>";
  }else{
    if($pass == $cpass){

      $insertquery = "insert into sign(username,email,password,cpassword) values('$user','$email','$pass','$cpass')";
      $result = $conn->query($insertquery);

      $_SESSION['message'] = "Admin added successfully";
      $_SESSION['msg-type'] = "info";

      header("Location: index.php");
    }else{
      echo "<script>alert('Password doesn't match');</script>";
      echo "<script>location.href='index.php'</script>";
    }
  }


}



if(isset($_GET['delete'])){
    $id = $_GET['delete'];


    $result = $conn->query("SELECT * FROM courses WHERE id=$id") or die($conn->error);

    if(mysqli_num_rows($result)==1){
        $row = $result->fetch_assoc();

        $conn->query("UPDATE courses SET status='rejected' WHERE id=$id;") or die($conn->error);

        $_SESSION['message'] = 'Course has been rejected successfully';
        $_SESSION['msg-type'] = "danger";
        header("Location: index.php");

    }

}

if(isset($_GET['del'])){

  $pid = $_GET['del'];

  $conn->query("delete from sign where id = $pid") or die($conn->error);

  $_SESSION['message'] = "Record has been deleted successfully";
  $_SESSION['msg-type'] = 'danger';

  header("Location: index.php");

}


if(isset($_GET['accept'])){
    $id = $_GET['accept'];

    $result = $conn->query("SELECT * FROM courses WHERE id=$id;") or die($conn->error);

    if(mysqli_num_rows($result)==1){
        $row = $result->fetch_assoc();

        $conn->query("UPDATE courses SET status='live' WHERE id=$id;") or die($conn->error);

        $_SESSION['message'] = 'Course has been accepted successfully';
        $_SESSION['msg-type'] = "success";
        header("Location: index.php");
    }
}


function countrows($table){
  include 'connect.php';
  $c = 0;
  $result = $conn->query("select * from $table");
  $c = mysqli_num_rows($result);
  return $c;
}



?>
