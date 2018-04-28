<?php
    include 'includes/header.php';
?>

<div class="container" style="height:100vh; overflow: auto;">
<h1>Update the User</h1>
<p>
<?php

  $con = mysql_connect("localhost","root","password");
  
  mysql_select_db("cms");
  
  $sql = "select user_id, username, type, dob, gender, tel_no, email, photo 
          from users;
		 ";
  
  $result = mysql_query($sql,$con);
  
  $rownum = mysql_num_rows($result); 

  echo "<table border=1 cellpadding=10 class='table table-hover'>";
  
  echo "<tr><th>ID</th>
			<th>Username</th>
			<th>Type</th>
            <th>DOB</th>
			<th>Gender</th>
			<th>Tel No.</th>
			<th>Email</th>
			<th>Photo</th>
			<th>Action</th>
		</tr>";
  
  for($i=0; $i<$rownum; $i++) {
	  
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
		     <td><a href='updateuser2.php?id=$id'>Update</a></td>
		   </tr>	     
	      ";
  }

  echo "</table>";
  
?>
</div>

<?php
    include 'includes/footer.php';
?>
