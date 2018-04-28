<?php
	session_start();

	$loginstatus = $_SESSION['login_status'];
	if($loginstatus == 'loginok') {
		// Already login
		$login_id = $_SESSION['login_id'];
		$loginname = $_SESSION['login_name'];
		$logintype = $_SESSION['login_type'];
		$type = ($logintype == "A") ? "Administrator" : "User";
		
	} else if(substr($_SERVER[REQUEST_URI], -9)  <> "login.php")  {
		// Have not login
	   header("Location:login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset=UTF-8>
<meta http-equiv=X-UA-Compatible content="IE=edge">
<meta name=viewport content="width=device-width, initial-scale=1">
<script src=https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js></script>
<link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css integrity=sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u crossorigin=anonymous>
<link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css integrity=sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp crossorigin=anonymous>
<link rel=stylesheet href=./css/myStyle.css>
<script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js integrity=sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa crossorigin=anonymous></script>
<script src=./js/myJS.js></script>
<title>Case Management System</title>
</head>
<body>
<nav class="navbar navbar-inverse navbar-default" role=navigation>
<div class=container>
<div class=navbar-header>
<button type=button class="navbar-toggle taber" data-toggle=collapse data-target=#navbar-collapse-1>
<span class=sr-only>Toggle navigation</span>
<span class="icon-bar top-bar"></span>
<span class="icon-bar middle-bar"></span>
<span class="icon-bar bottom-bar"></span>
</button>
<div>
<a href=index.php><h2>CMS</h2></a>
</div>
</div>
<div class="collapse navbar-collapse" id=navbar-collapse-1>
<ul class="nav navbar-nav">
<?php if($logintype == 'A') {?>
<li class=dropdown>
<a href=# class=dropdown-toggle data-toggle=dropdown>Manage Users <b class=caret></b></a>
<ul class=dropdown-menu>
<li><a href=searchuser.php>Search User</a></li>
<li><a href=adduser.php>Add User</a></li>
<li><a href=updateuser.php>Update User</a></li>
<li><a href=deleteuser.php>Delete User</a></li>
</ul>
</li>
<?php } ?>
<?php if($logintype == 'A' || $logintype == 'U') {?>
<li class=dropdown>
<a href=# class=dropdown-toggle data-toggle=dropdown>Manage Cases <b class=caret></b></a>
<ul class=dropdown-menu>
<li><a href=searchcase.php>Search Case</a></li>
<li><a href=addcase.php>Add Case</a></li>
<li><a href=updatecase.php>Update Case</a></li>
<li><a href=deletecase.php>Delete Case</a></li>
</ul>
</li>
</li>
<li class=dropdown>
<a href=# class=dropdown-toggle data-toggle=dropdown>Report <b class=caret></b></a>
<ul class=dropdown-menu>
<li><a href=listusers.php>List All Users</a></li>
<li><a href=listcases.php>List All Cases</a></li>
</ul>
</li>
<?php } ?>
</ul>
<ul class="nav navbar-nav navbar-right">
<?php if($loginstatus == 'loginok') {?>
<li><a href="updateuser2.php?id=<?php echo $login_id ?>" class="glyphicon glyphicon-user" style=color:orange><?php echo " " . $loginname . " (" . $type . ")"; ?></a></li>
<li><a href=logout.php><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
<?php } else { ?>
<li><a href=login.php><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
<?php } ?>
</ul>
</div>
</div>
</nav>
</body>
</html>