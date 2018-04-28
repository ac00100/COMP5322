<?php
    include 'includes/header.php';
?>

<script type="text/javascript">
	$(function() {
		var password = document.getElementById("password")
		  , confirm_password = document.getElementById("confirm_password");

		function validatePassword(){
		  if(password.value != confirm_password.value) {
			confirm_password.setCustomValidity("Passwords Don't Match");
		  } else {
			confirm_password.setCustomValidity('');
		  }
		}

		password.onchange = validatePassword;
		confirm_password.onkeyup = validatePassword;
	});
	
</script>

<div class="container">
<h1>Update the User</h1>
<p>
<?php

  $id = $_GET['id'];
  
  $con = mysql_connect("localhost","root","password");
  
  mysql_select_db("cms",$con);
  
  $sql = "select user_id, username, password, type, dob, gender, tel_no, email, photo
          from users
          where user_id = $id";
		  
  $result = mysql_query($sql,$con);	

  $row = mysql_fetch_array($result);   

  $name   = $row['username'];
  $password   = $row['password'];
  $type   = ($row[2] == "A") ? "Administrator" : "User";
  $dob    = $row['dob'];
  $gender = $row['gender'];
  $telNo  = $row['tel_no'];
  $email  = $row['email'];
  $photo  = $row['photo'];

  /*
  echo $id;
  echo "<p>";
  echo $name;
  echo "<p>";
  echo $password;
  echo "<p>";
  echo $type;
  echo "<p>";
  echo $dob;
  echo "<p>";
  echo $gender;	
  echo "<p>";
  echo $telNo;
  echo "<p>";
  echo $email;
  echo "<p>";
  echo $photo;
  */
  
?>
	<div class="form-group">
	<form enctype="multipart/form-data" method="post" action="updateuser3.php">

		<input type="hidden" name="id" value="<?php echo $id; ?>" />

		<label for="name">Username:</label><input class="form-control" type="text" name="name" value="<?php echo $name; ?>" required placeholder="Enter username" /><p>
		
		<label for="password">Password:</label>
		<input class="form-control" type="password" id="password" name="password" value="<?php echo $password; ?>" required placeholder="Enter password" /><p>
		
		<label for="confirm_password">Confirm Password:</label>
		<input class="form-control" type="password" id="confirm_password" name="confirm_password" required placeholder="Enter confirm password" /><p>
		
		<fieldset class="form-group">
		<label for="type">User Type:</label>
		<div class="form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="radio" value="A" name="type" checked />Administrator
			</label>
		</div>
		<div class="form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="radio" value="U" name="type" />User
			</label>
		</div>
		</fieldset>

		<label for="dob">DOB:</label><input class="form-control" type="date" name="dob" value="<?php echo $dob; ?>" required placeholder="Enter date of birth" /><p>

		<fieldset class="form-group">
		<label for="gender">Gender:</label>
				<?php 
					if($gender == "M") {
					  echo   '<div class="form-check"><label class="form-check-label"><input type="radio" value="M" name="gender" checked />Male</label></div>
							  <div class="form-check"><label class="form-check-label"><input class="form-check-input"type="radio" value="F" name="gender" />Female</label></div><p>';
					} else {

					  echo   '<div class="form-check"><label class="form-check-label"><input class="form-check-input" type="radio" value="M" name="gender"  />Male</label></div>
							  <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="radio" value="F" name="gender" checked />Female</label></div><p>';
					}
				?>
				</label>
			</div>
		
		<label for="tel_no">Tel No.:</label><input class="form-control" type="tel" name="tel_no" value="<?php echo $telNo; ?>" required  placeholder="Enter tel no." /><p>
	   
		<label for="email">Email:</label><input class="form-control" type="email" name="email" value="<?php echo $email; ?>" required placeholder="Enter email" /><p>
	   
		<!-- Dept: <select name="dept">
			   <option value="0">Please select</option>
			   <option value="1" <?php if($deptid==1) echo "selected"; ?>>IT</option>
			   <option value="2" <?php if($deptid==2) echo "selected"; ?>>Acct</option>
			   <option value="3" <?php if($deptid==3) echo "selected"; ?>>HR</option>   
			 </select><p> -->
			 
		<label for="photo">Photo:</label><input class="form-control-file" type="file" name="photo" aria-describedby="fileHelp" /><p>
			<img src="upload/<?php echo $photo; ?>" width="100" /><p>   
		<br><br>
		<input type="submit" class="btn btn-primary" value="Update User" /><br><br>
		<a class="label label-primary" href="updateuser.php">Back to Pervious page</a>
	</form>
	</div>
</div>

<?php
    include 'includes/footer.php';
?>


















