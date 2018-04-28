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
	<h1>Add New User</h1>
	<div class="form-group">
	<form enctype="multipart/form-data" method="post" action="adduser2.php">

		<label for="username">Username:</label>
		<input class="form-control" type="text" name="username" required placeholder="Enter username" />
		<small id="usernameHelp" class="form-text text-muted">e.g Mary</small><p>
		
		<label for="password">Password:</label>
		<input class="form-control" type="password" id="password" name="password" required placeholder="Enter password" /><p>
		
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

		<label for="dob">DOB:</label>
		<input class="form-control" type="date" name="dob" required placeholder="Enter date of birth" />
		<small id="debHelp" class="form-text text-muted">e.g 2018-03-31</small><p>

		<fieldset class="form-group">
		<label for="gender">Gender:</label>
		<div class="form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="radio" value="M" name="gender" checked />Male
			</label>
		</div>
		<div class="form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="radio" value="F" name="gender" />Female
			</label>
		</div>
		</fieldset>
		

		<label for="tel_no">Tel No.:</label>
		<input class="form-control" type="tel" name="tel_no" maxlength="8" size="6" required placeholder="Enter tel no." /><p>
		
		<label for="email">Email:</label>
		<input class="form-control" type="email" name="email" required placeholder="Enter email" /><p>

		<!--
		Dept:<input type="radio" value="1" name="dept" />IT
			<input type="radio" value="2" name="dept" />Acct
			<input type="radio" value="3" name="dept" />HR<p>   
		-->

		<!--
		Dept: <select name="dept">
			   <option value="0">Please select</option>
			   <option value="1">IT</option>
			   <option value="2">Acct</option>
			   <option value="3">HR</option>   
			 </select><p>
		-->

		<label for="photo">Photo:</label>
		<input type="file" class="form-control-file" name="photo" aria-describedby="fileHelp" /><p>	 
		<br>
		<input type="submit" class="btn btn-primary" value="Add User" />

	</form>
	</div>
</div>

<?php
    include 'includes/footer.php';
?>
