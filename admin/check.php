<?php
error_reporting(0);
  include_once 'connect.php';
  
  session_start();
    

$uid = isset($_POST['uid']) ? $_POST['uid'] : $_SESSION['admin'];
$_SESSION['admin'] = $uid;

  if(isset($_POST['login'])){

    $user = $_POST['uid'];
    $pass = $_POST['pass'];

    $result = $conn->query("select * from sign where username = '$user'");
      
      
    if(mysqli_num_rows($result)){
      $row = $result->fetch_assoc();
      $pwd = $row['password'];
      $pwd = substr($pwd, 0, 60);
      $valid = password_verify($pass, $pwd);
      $us = strtoupper($user);

      if($valid){

        $_SESSION['admin'] = $row['username'];
        $_SESSION['message'] =  "Welcome $us";
        $_SESSION['msg-type'] = 'info';

        header("Location: index.php");

      }else{
          unset($_SESSION['admin']);
        echo "<script>alert('Password doesnt match');</script>";
        echo "<script>location.href='login.php'</script>";
      }

    }else{
        unset($_SESSION['admin']);
      echo "<script>alert('Username doesnt exist');</script>";
      echo "<script>location.href='login.php'</script>";
    }

  }

 ?>
