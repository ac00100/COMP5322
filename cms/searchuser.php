<?php
    include 'includes/header.php';
?>

<div class="container">
	<h1>Search the User</h1>
	<div class="form-group">
	<form method="get" action="searchuser2.php">
	
		<label for="name">Keyword:</label>
		<input class="form-control" type="text" name="keyword" placeholder="Enter username, email or tel no." />
		<small id="emailHelp" class="form-text text-muted">
			Please enter username, email or tel no. to search user record (case-insensitive)
		</small><p>
		<br>
		<input type="submit" class="btn btn-primary" value="Search" />
		
	</form>
	</div>
</div>

<?php
    include 'includes/footer.php';
?>