<?php
    include 'includes/header.php';
?>

<div class="container">
	<h1>Add New Case</h1>
	<div class="form-group">
	<form id="caseform" enctype="multipart/form-data" method="post" action="addcase2.php">

		<label for="name">Case Name:</label>
		<input class="form-control" type="text" name="name" required placeholder="Enter case name" />

		<label for="created">Created Date:</label>
		<input class="form-control" type="date" name="created" required placeholder="Enter case created date" />
		<small id="debHelp" class="form-text text-muted">e.g 2018-03-31</small><p>

		<fieldset class="form-group">
		<label for="status">Status:</label>
		<div class="form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="radio" value="O" name="status" checked />Open
			</label>
		</div>
		<div class="form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="radio" value="C" name="status" />Closed
			</label>
		</div>
		</fieldset>
		

		<label for="ref_no">Reference No.:</label>
		<input class="form-control" type="number" name="ref_no" maxlength="8" onkeypress="if (this.value.length >= 8) { return false; }" size="6" required placeholder="Enter reference no." /><p>
		<p>
		<label for="description">Description:</label><br>
		<textarea rows="4" cols="125" onkeypress="if (this.value.length >= 500) { return false; }" name="description" form="caseform" placeholder="Enter description"></textarea>
		<p>

		<!--
		Dept:<input type="radio" value="1" name="dept" />IT
			<input type="radio" value="2" name="dept" />Acct
			<input type="radio" value="3" name="dept" />HR<p>   
		-->

		
		User Handled By: <select name="user_id">
			   <option value="">Please select</option>
			   <?php
				  $con = mysql_connect("localhost","root","password");
				  mysql_select_db("cms");
				  
				  $sql = "select user_id, username
						  from users;";
				  
				  $result = mysql_query($sql,$con);
				  $rownum = mysql_num_rows($result); 
				  
				  for($i=0; $i<$rownum; $i++) {
					 $row = mysql_fetch_array($result);

					 $id = $row[user_id];
					 $username = $row[username];

					 echo "<option value='$id'>$username</option>";
				  }
				?>
			 </select><p>
		

		<!--
		<label for="photo">Photo:</label>
		<input type="file" class="form-control-file" name="photo" aria-describedby="fileHelp" /><p>
		-->
		<br>
		<input type="submit" class="btn btn-primary" value="Add Case" />

	</form>
	</div>
</div>

<?php
    include 'includes/footer.php';
?>
