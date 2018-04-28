<?php
    include 'includes/header.php';
?>

<div class="container">
<h1>Update the Case</h1>
<p>
<?php

  $id = $_GET['id'];
  
  $con = mysql_connect("localhost","root","password");
  
  mysql_select_db("cms");
  
  $sql = "select case_id, name, created, status, ref_no, description, user_id
          from cases
		  where case_id = $id;";
		  
  //echo $sql;
  
  $result = mysql_query($sql,$con);	

  $row = mysql_fetch_array($result);   

  $name        = $row['name'];
  $created     = $row['created'];
  $status      = $row['status'];
  $ref_no      = $row['ref_no'];
  $description = $row['description'];
  $user_id     = $row['user_id'];
  

  /*
  echo $id;
  echo "<p>";
  echo $name;
  echo "<p>";
  echo $created;
  echo "<p>";
  echo $status;	
  echo "<p>";
  echo $ref_no;
  echo "<p>";
  echo $description;
  echo "<p>";
  echo $user_id;
  echo "<p>";
  */
  
?>
	<div class="form-group">
	<form id="caseform" enctype="multipart/form-data" method="post" action="updatecase3.php">

		<input type="hidden" name="id" value="<?php echo $id; ?>" />

		<label for="name">Case Name:</label>
		<input class="form-control" type="text" name="name" value="<?php echo $name; ?>" required placeholder="Enter case name" /><p>

		<label for="created">Created Date:</label>
		<input class="form-control" type="date" name="created" value="<?php echo $created; ?>" required placeholder="Enter case created date" /><p>

		<fieldset class="form-group">
		<label for="status">Status:</label>
				<?php 
					if($status == "O") {
					  echo   '<div class="form-check"><label class="form-check-label"><input type="radio" value="O" name="status" checked />Open</label></div>
							  <div class="form-check"><label class="form-check-label"><input class="form-check-input"type="radio" value="C" name="status" />Close</label></div><p>';
					} else {

					  echo   '<div class="form-check"><label class="form-check-label"><input class="form-check-input" type="radio" value="O" name="status"  />Open</label></div>
							  <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="radio" value="C" name="status" checked />Close</label></div><p>';
					}
				?>
				</label>
			</div>
		
		<input class="form-control" type="text" name="ref_no" value="<?php echo $ref_no; ?>" maxlength="8" onkeypress="if (this.value.length >= 8) { return false; }" size="6" required placeholder="Enter reference no." /><p>
	    <p>
		<label for="description">Description:</label><br>
		<textarea rows="4" cols="125" onkeypress="if (this.value.length >= 500) { return false; }" name="description" form="caseform" placeholder="Enter description"><?php echo $description; ?></textarea>
		<p>
	   
		<!-- Dept: <select name="dept">
			   <option value="0">Please select</option>
			   <option value="1" <?php if($deptid==1) echo "selected"; ?>>IT</option>
			   <option value="2" <?php if($deptid==2) echo "selected"; ?>>Acct</option>
			   <option value="3" <?php if($deptid==3) echo "selected"; ?>>HR</option>   
			 </select><p> -->
			 
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

					 if ($id == $user_id) {
						echo "<option value='$id' selected>$username</option>";
					 }
					 else {
						echo "<option value='$id'>$username</option>";
					 }
				  }
				?>
			 </select><p>
		<br><br>
		<input type="submit" class="btn btn-primary" value="Update Case" /><br><br>
		<a class="label label-primary" href="updatecase.php">Back to Pervious page</a>
	</form>
	</div>
</div>

<?php
    include 'includes/footer.php';
?>


















