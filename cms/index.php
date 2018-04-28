<?php
    session_start();

	$loginstatus = $_SESSION['login_status'];
	
	if($loginstatus == 'loginok') {
	   // Already login	
	   $loginname = $_SESSION['login_name'];		
		
    } else {
	   // Have not login 
	   header("Location:login.php");
    }
?>

<!DOCTYPE html>
<html>
	<body>
		<?php include './includes/header.php';?>

		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1 class="grayTitle">Welcome back !</h1>
				</div>

				<div class="logBox col-md-6 col-xs-12">
					<p class="cLog">Change Log:</p>
					<li>3-4-2018 index page updated.</li>
					<li>31-3-2018 website and server are built.</li>
				</div>

				<div class="col-md-6 col-xs-12">
					<table>
						<thead>
							<tr>
								<th>Members</th>
								<th>ID</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Lam Wai Pan</td>
								<td>15046234G</td>
							</tr>
							<tr>
								<td>Li Cheuk Wai</td>
								<td>14013238G</td>
							</tr>
							<tr>
								<td>Cheng Hei Gervais</td>
								<td>17044726G</td>
							</tr>
							<tr>
								<td>Lo Ka kiu</td>
								<td>17045661G</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div
			
			<hr>
			
			<div class="row">
				<div class="container">
					<?php if($logintype == 'A') {?>
						<div onmouseover="overUser(this)" onmouseout="normalUser(this)" class="col-sm-4 col-xs-6 User" id="UUU">
							<h3>Manage Users</h3>
							<div class="UserOption" id="subUUU">
								<a class="option" href="searchuser.php">Search User</a><br>
								<a class="option" href="adduser.php">Add User</a><br>
								<a class="option" href="updateuser.php">Update User</a><br>
								<a class="option" href="deleteuser.php">Delete User</a>
							</div>
							</div>
					<?php } ?>						
					<?php if($logintype == 'A') {?>
						<div onmouseover="overCase(this)" onmouseout="normalCase(this)" class="col-sm-4 col-xs-6 Case" id="CCC">						
								<h3>Manage Cases</h3>
								<div class="UserOption" id="subCCC">
									<a class="option" href="searchcase.php">Search Case</a><br>
									<a class="option" href="addcase.php">Add Case</a><br>
									<a class="option" href="updatecase.php">Update Case</a><br>
									<a class="option" href="deletecase.php">Delete Case</a>
								</div>	
						</div>
					<?php } ?>
					<?php if($logintype == 'A') {?>
						<div onmouseover="overReport(this)" onmouseout="normalReport(this)" class="col-sm-4 col-xs-6 Report" id="RRR">							
							<h3>Report</h3>
							<div class="UserOption" id="subRRR">
								<a class="option" href="listusers.php">List All Users</a><br>
								<a class="option" href="listcases.php">List All Cases</a>
							</div>								
						</div>
					<?php } ?>	
				</div>
			</div>
			<!-- End of Row -->
		</div>

		<hr>
		<?php include 'includes/footer.php';?>
	</body>
</html>