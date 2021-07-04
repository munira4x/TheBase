<?php
//set connection variables
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_db = 'base_db';
 //connection to server & database
 $con = mysqli_connect($db_host, $db_user, $db_password, $db_db );

 //check connection
 if(mysqli_connect_errno()):
   printf("Connect failed: %s\n", mysqli_connect_errno());
   exit();
 endif;

if(isset($_POST['forward'])){
    $my_query = "select * from base WHERE 1 ";
    $result = mysqli_query($con, $my_query);
    $my_query = "INSERT INTO base (forward) VALUES (forward); ";
    $result = mysqli_query($con, $my_query);
    if($result){
      echo "DONE"
    }else{
      echo "ERROR"
    }elseif (isset($_POST['backward'])) {
      $my_query = "select * from base WHERE 1 ";
      $result = mysqli_query($con, $my_query);
      $my_query = "INSERT INTO base (backward) VALUES (backward); ";
      $result = mysqli_query($con, $my_query);
      if($result){
        echo "DONE"
      }else{
        echo "ERROR"
      }
    }elseif (isset($_POST['stop'])) {
      $my_query = "select * from base WHERE 1 ";
      $result = mysqli_query($con, $my_query);
      $my_query = "INSERT INTO base (stop) VALUES (stop); ";
      $result = mysqli_query($con, $my_query);
      if($result){
        echo "DONE"
      }else{
        echo "ERROR"
      }
    }elseif (isset($_POST['right'])) {
      $my_query = "select * from base WHERE 1 ";
      $result = mysqli_query($con, $my_query);
      $my_query = "INSERT INTO base (Right) VALUES (right); ";
      $result = mysqli_query($con, $my_query);
      if($result){
        echo "DONE"
      }else{
        echo "ERROR"
      }
    }elseif (isset($_POST['left'])) {
      $my_query = "select * from base WHERE 1 ";
      $result = mysqli_query($con, $my_query);
      $my_query = "INSERT INTO base (Left) VALUES (left); ";
      $result = mysqli_query($con, $my_query);
      if($result){
        echo "DONE"
      }else{
        echo "ERROR"
      }
    }
}
?>
