<?php
    include 'includes/header.php';
?>

<div class="container">
<div class="jumbotron">
<h1>Please login</h1>

<form method="post" action="checklogin.php">
 
	<input class="form-control" type="text" name="username" placeholder="Username" /><p>

	<input class="form-control" type="password" name="password" placeholder="Password" /><p>

	<input class="btn btn-primary" type="submit" value="Login" />

	<?php
	
		$con = mysql_connect("localhost","root","password");

		mysql_select_db("cms");

		$sql = "select username, password
			  from users where type = 'A';
			 ";

		$result = mysql_query($sql,$con);

		$rownum = mysql_num_rows($result); 
		
		echo "<h2>Administrator</h2>";

		echo "<table border=1 cellpadding=10 class='table table-striped'>";

		echo "<tr>
				<th>Username</th>
				<th>Password</th>
			</tr>";

		for($i=0; $i<$rownum; $i++) {
		  
			$row = mysql_fetch_array($result);

			$username = $row[0];
			$password = $row[1];

			echo "<tr>  
				 <td>$username</td>
				 <td>$password</td>
			   </tr>	     
			  ";
		}

		echo "</table>";
		
		$sql = "select username, password
			  from users where type = 'U';
			 ";

		$result = mysql_query($sql,$con);

		$rownum = mysql_num_rows($result); 
		
		echo "<h2>Normal User</h2>";

		echo "<table border=1 cellpadding=10 class='table table-striped'>";

		echo "<tr>
				<th>Username</th>
				<th>Password</th>
			</tr>";

		for($i=0; $i<$rownum; $i++) {
		  
			$row = mysql_fetch_array($result);

			$username = $row[0];
			$password = $row[1];

			echo "<tr>  
				 <td>$username</td>
				 <td>$password</td>
			   </tr>	     
			  ";
		}

		echo "</table>";
  
	?>

</form>
</div>
</div>

<?php
    include 'includes/footer.php';
?>