<?php
    include 'includes/header.php';
?>

<div class="container">
	<?php

	  $keyword = $_GET['keyword'];

	  $con = mysql_connect("localhost","root","password");
	  
	  mysql_select_db("cms");
	  
	  $sql = "Select user_id, username, type, dob, gender, tel_no, email, photo
              from users
			  where UPPER(username) like UPPER('%$keyword%')
				 or UPPER(email) like UPPER('%$keyword%')
				 or UPPER(tel_no) like UPPER('%$keyword%')
			 ";

	  $result = mysql_query($sql,$con);  
			 
	  $numrow = mysql_num_rows($result);

	  if($numrow == 0) {
		   
		  echo "<h2>No record matches</h2>";
		   
	  } else {

		  echo "<h2>$numrow records found</h2>"; 
		  
		  echo "<table border=1 cellpadding=10 class='table table-striped'>";
	  
		  echo "<tr><th>User ID</th>
					<th>Username</th>
					<th>Type</th>
					<th>DOB</th>
					<th>Gender</th>
					<th>Tel No.</th>
					<th>Email</th>
					<th>Photo</th>
				</tr>";
		  
		  for($i=0; $i<$numrow; $i++) {
			  
			 $row = mysql_fetch_array($result);

			 $id = $row[0];
			 $name = $row[1];
			 $type = ($row[2] == "A") ? "Administrator" : "User";
			 $dob = $row[3];
			 $gender = $row[4];
			 $telNo = $row[5];
			 $email = $row[6];
			 $photo = $row[7];

			 echo "<tr>  
					 <td>$id</td>
					 <td>$name</td>
					 <td>$type</td>
					 <td>$dob</td>
					 <td>$gender</td>
					 <td>$telNo</td>
					 <td>$email</td>
					 <td><img src='upload/$photo' width='100' /></td>
				   </tr>	     
				  ";
		  }

		  echo "</table>";
		  
	  }  
	?>
	<a class="label label-primary" href="searchuser.php">Back to Search User page</a>
</div>
<?php
    include 'includes/footer.php';
?>
