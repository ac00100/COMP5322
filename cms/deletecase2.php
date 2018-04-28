<?php
    include 'includes/header.php';
?>

<div class="container">
<?php

  $id = $_GET['id'];
  
  $con = mysql_connect("localhost","root","password");
  
  mysql_select_db("cms");
  
  $sql = "delete from cases 
          where case_id = $id";

  $result = mysql_query($sql,$con);

  if($result) {

    // echo "<h2>Delete OK</h2>";
	echo "<h2>Delete Success!</h2>";
  
  } else {

    echo "<h2>Delete Failure!</h2>";
  } 
?>
<br>
<a class="label label-primary" href="deletecase.php">Back to Delete Case page</a>
</div>

<?php
    include 'includes/footer.php';
?>




