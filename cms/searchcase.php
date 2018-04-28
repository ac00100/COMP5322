<?php
    include 'includes/header.php';
?>

<div class="container">
	<h1>Search the Case</h1>
	<div class="form-group">
	<form method="get" action="searchcase2.php">
	
		<label for="name">Keyword:</label>
		<input class="form-control" type="text" name="keyword" placeholder="Enter case name, description, user handled by or reference no." />
		<small id="emailHelp" class="form-text text-muted">
			Please enter case name, description, user handled by or reference no. to search case record (case-insensitive)
		</small><p>
		<br>
		<input type="submit" class="btn btn-primary" value="Search" />
		
	</form>
	</div>
</div>

<?php
    include 'includes/footer.php';
?>