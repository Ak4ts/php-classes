<?php
  session_start();
  $user = $_POST["username"];
  $password = $_POST["password"];
  $conn = new mysqli( "localhost", "root", "", "class" );


  $row = mysqli_query($conn, "select * from users where username='$user' and password='$password'");
  $raw = mysqli_fetch_assoc($row);
  if(!$_SESSION['user']){
    $row = mysqli_query($conn, "select * from users where username='$user' and password='$password'");
    $raw = mysqli_fetch_assoc($row);
    if(!$raw){
      header('Location: http://localhost/php_auth/');
    } else {
      $_SESSION['user'] ="asd";
    }
  }
  if($_SESSION['user']){
    $_SESSION['user'] = $user;
    echo "Hi, ".$_SESSION['user']." how're you?";
    echo "<a href='logoff.php'> exit </p>";
  }
?>
