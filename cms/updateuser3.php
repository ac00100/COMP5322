<?php
    include 'includes/header.php';
?>

<div class="container">
<?php
   
    $id = $_POST['id'];
    $name = $_POST['name'];
	$password = $_POST['password'];
	$type = $_POST['type'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$telNo = $_POST['tel_no'];
	$email = $_POST['email'];
	
	// Help to save the uploaded file to the folder
	$filename = "";
	$filename = $_FILES['photo']['name'];
	$tempname = $_FILES['photo']['tmp_name'];
	move_uploaded_file($tempname,"upload/".$filename);
	
	$con = mysql_connect("localhost","root","password");

	mysql_select_db("cms");
	
	if($filename != "" ) {
	
		$sql = "update users 
				set username   = '$name',
				    password   = '$password',
					type   = '$type',
					dob    = '$dob',
					gender = '$gender',
					tel_no  = '$telNo',
					email =  '$email',
					photo  = '$filename'
				where user_id = $id";	
		
	} else {
		
		$sql = "update users 
				set username   = '$name',
				    password   = '$password',
					type   = '$type',
					dob    = '$dob',
					gender = '$gender',
					tel_no  = '$telNo',
					email =  '$email'
				where user_id = $id";		
	}

	$result = mysql_query($sql,$con);

    if($result) {
	
      echo "<h2>Record updated Success!</h2>";
		
	} else {

	  echo "<h2>Record cannot be updated !!</h2>";

    }		
?>
<p>
<a class="label label-primary" href="updateuser.php">Back to Update User page</a>
</div>

<?php
    include 'includes/footer.php';
?>
