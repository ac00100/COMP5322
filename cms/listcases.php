<?php
    include 'includes/header.php';
?>

<div class="container" style="height:100vh; overflow: auto;">
<h1>List All Cases</h1>
<?php

  $con = mysql_connect("localhost","root","password");
  
  mysql_select_db("cms");
  
  $sql = "select case_id, name, created, status, ref_no, description, username
          from cases c
		  left join users u on u.user_id = c.user_id;
		 ";
  
  $result = mysql_query($sql,$con);
  
  $rownum = mysql_num_rows($result); 

  echo "<table border=1 cellpadding=10 class='table table-striped'>";
  
  echo "<tr><th>Case ID</th>
			<th>Case Name</th>
            <th>Created Date</th>
			<th>Status</th>
			<th>Ref No.</th>
			<th>Description</th>
			<th>User Handled By</th>
		</tr>";
  
  for($i=0; $i<$rownum; $i++) {
	  
	 $row = mysql_fetch_array($result);

     $id = $row[0];
     $name = $row[1];
     $created = $row[2];
     $status = ($row[3] == "O") ? "Open" : "Closed";
     $refNo = $row[4];
	 $description = $row[5];
	 $username = $row[6];

	 echo "<tr>  
			 <td>$id</td>
			 <td>$name</td>
			 <td>$created</td>
			 <td>$status</td>
			 <td>$refNo</td>
			 <td>$description</td>
			 <td>$username</td>
		   </tr>	     
	      ";
  }

  echo "</table>";
  
?>
</div>

<?php
    include 'includes/footer.php';
?>









