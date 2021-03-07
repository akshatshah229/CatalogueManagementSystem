<!-- Last Name: Shah
First name: Akshat
UTA ID: 1001744567 -->
<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
	<link rel="stylesheet" type="text/css" href="../css/app.css">
	<link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="navbar">
		<div class="topnav">
			<a href="signin">Logout</a>
			<a href="https://www.facebook.com/" class="fafa"><i class="fa fa-facebook-square"></i></a>
			<a href="https://www.instagram.com/" class="fafa"><i class="fa fa-instagram"></i></a>
			<a href="https://www.youtube.com/" class="fafa"><i class="fa fa-youtube-play"></i></a>
		</div>
		<div class="second-topnav">
			<a href="admin_home">Home</a>
			<a href="admin_about">About</a>
			<a href="admin_forum">Forum</a>
			<a href="admin_users_func">Users</a>
		</div>
	</div>
	<div class="main-body">
		<div class="body-header">
			<h1>Users</h1>
		</div>
		<div class="student-container">
			<div class="admin-right-container">
				@foreach ($data as $rows)
				<div class="staff-image-container">
					<img src='../images/roles.jpg'>
					<h2 class='h1-list-admin'>{{$rows->name}} - {{$rows->id}}</h2>
					<h5 class='h1-list-admin'>Staff</h5>
					<a href="admin_update_form" class="button-form">Update</a>
				</div>
				@endforeach
				@foreach ($data1 as $rows)
				<div class="staff-image-container">
					<img src='../images/roles.jpg'>
					<h2 class='h1-list-admin'>{{$rows->name}} - {{$rows->id}}</h2>
					<h5 class='h1-list-admin'>Student</h5>
					<a href="admin_update_form" class="button-form">Update</a>
				</div>
				@endforeach
			</div>
			<div class="add-button">
				<a href="admin_add_users" class="button-form-add">Add Users</a>
				<a href="admin_delete_users" class="button-form-add">Delete Users</a>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="footer-left">
			<h5>Created By: Akshat Ashwin Shah</h5>
			<h5>All Rights Reserved <i class="fa fa-copyright"></i></h5>
		</div>
	</div>
</body>
</html>