<?php
include('server.php');
if(!isset($_SESSION['username']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest'){
 die("<script>window.location.reload()</script>");
}
if(isset($_SESSION['username']) && isset($_POST['msg'])){
 $msg=htmlspecialchars($_POST['msg']);
 if($msg!=""){
	 $username=$_SESSION['username'];
	 $value="false";
	 $user=$_SESSION['users2'];
  $sql="INSERT INTO messages1 VALUES ('$username','$user','$msg','$value',NOW())";
  mysqli_query($con,$sql);
 }
}
?>
