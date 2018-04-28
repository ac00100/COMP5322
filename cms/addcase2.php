<?php
    include 'includes/header.php';
?>
<div class="container">
<?php
	
    $name = $_POST['name'];
	$created = $_POST['created'];
	$status = $_POST['status'];
	$ref_no = $_POST['ref_no'];
	$description = $_POST['description'];
	$user_id = $_POST['user_id'];
	
	// Help to save the uploaded file to the folder
	/*$filename = $_FILES['photo']['name'];
	$tempname = $_FILES['photo']['tmp_name'];
	move_uploaded_file($tempname,"upload/".$filename);*/
	
	$con = mysql_connect("localhost","root","password");
	
	mysql_select_db("cms");
	
	if($user_id != "" ) {
		$sql = "insert into cases(name,created,status,ref_no,description,user_id)
				values ('$name','$created','$status',$ref_no,'$description','$user_id');";
	}
	else {
		$sql = "insert into cases(name,created,status,ref_no,description)
				values ('$name','$created','$status',$ref_no,'$description');";
	}
			
	echo $sql;
	
	$result = mysql_query($sql,$con);	

    if($result) {

	   echo "<h3>New Case Added</h3>";
	
    } else {

	   echo "<h3>Case cannot added !!</h3>";
    }
?>
<p>
<a class="label label-primary" href="addcase.php">Back to Add Case page</a>
</div>

<?php
    include 'includes/footer.php';
?>






