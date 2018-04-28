<?php
    include 'includes/header.php';
?>
<div class="container">
<?php
   
    $username = $_POST['username'];
	$password = $_POST['password'];
	$type = $_POST['type'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$tel_no = $_POST['tel_no'];
	
	// Help to save the uploaded file to the folder
	$filename = $_FILES['photo']['name'];
	$tempname = $_FILES['photo']['tmp_name'];
	move_uploaded_file($tempname,"upload/".$filename);
	
	$con = mysql_connect("localhost","root","password");
	
	mysql_select_db("cms");
	
    $sql = "insert into users(username,password,type,dob,gender,tel_no,email,photo)
            values ('$username','$password','$type','$dob','$gender',$tel_no,'$email','$filename')";
			
	$result = mysql_query($sql,$con);	

    if($result) {

	   echo "<h3>New User Added</h3>";
	
    } else {

	   echo "<h3>User cannot added !!</h3>";
    }
?>
<p>
<a class="label label-primary" href="adduser.php">Back to Add User page</a>
</div>

<?php
    include 'includes/footer.php';
?>






