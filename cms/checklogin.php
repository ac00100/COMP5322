<?php

  $username = $_POST['username'];
  $password = $_POST['password'];

  $con = mysql_connect("localhost","root","password");
  
  mysql_select_db("cms");
  
  $sql = "Select * 
          from users
		  where username = '$username' 
		    and password = '$password'";

  // Nothing return means No matching means Cannot login
  // Something return means Have matching means Can Login

  $result = mysql_query($sql,$con);
  
  $numrow = mysql_num_rows($result);
  
  if($numrow == 0) {
	  
	 //echo "<h2>Username or password is wrong</h2>";

     header("Location:login.php");	
  
  } else {

     //echo "<h2>Login Success</h2>";
	 
	 $row = mysql_fetch_array($result);
	 $user_id = $row['user_id'];
	 $username = $row['username'];
	 $type = $row['type'];
	 	 
	 session_start();
	 $_SESSION['login_id'] = $user_id;
	 $_SESSION['login_name'] = $username;
	 $_SESSION['login_type'] = $type;
	 $_SESSION['login_status'] = "loginok";
	 
	 header("Location:index.php");
	 
  }  

?>





