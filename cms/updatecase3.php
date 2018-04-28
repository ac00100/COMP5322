<?php
    include 'includes/header.php';
?>

<div class="container">
<?php
   
    $id          = $_POST['id'];
    $name        = $_POST['name'];
	$created     = $_POST['created'];
	$status      = $_POST['status'];
	$ref_no      = $_POST['ref_no'];
	$description = $_POST['description'];
	$user_id     = $_POST['user_id'];
	
	// Help to save the uploaded file to the folder
	/*$filename = "";
	$filename = $_FILES['photo']['name'];
	$tempname = $_FILES['photo']['tmp_name'];
	move_uploaded_file($tempname,"upload/".$filename);*/
	
	$con = mysql_connect("localhost","root","password");

	mysql_select_db("cms");
	
	if($user_id != "" ) {
	
		$sql = "update cases 
				set name        = '$name',
					created     = '$created',
					status      = '$status',
					ref_no      = '$ref_no',
					description = '$description',
					user_id     = '$user_id'
				where case_id = $id";
		
	} else {
		
		$sql = "update cases 
				set name        = '$name',
					created     = '$created',
					status      = '$status',
					ref_no      = '$ref_no',
					description = '$description',
				where case_id = $id";		
	}
	
	//echo $sql;

	$result = mysql_query($sql,$con);

    if($result) {
	
      echo "<h2>Record updated Success!</h2>";
		
	} else {

	  echo "<h2>Record cannot be updated !!</h2>";

    }		
?>
<p>
<a class="label label-primary" href="updatecase.php">Back to Update Case page</a>
</div>

<?php
    include 'includes/footer.php';
?>
