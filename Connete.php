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
   printf("Connect failed", mysqli_connect_errno());
   exit();
 endif;
error_reporting(0);

$forward = $_POST['forward'];
$bakward = $_POST['bakward'];
$right   = $_POST['Right'];
$left    = $_POST['Left'];
$stop    = $_POST['stop'];

if(isset($_POST['forward'])){
    $my_query = "select * from base WHERE 1 ";
    $result = mysqli_query($con, $my_query);
    $my_query = "INSERT INTO base (forward,backword,Right,Left,stop) VALUES (forward,backward,right,left,stop); ";
    $result = mysqli_query($con, $my_query);
    if($result){
      echo "DONE"
    }else{
      echo "ERROR"
    }
}
?>
