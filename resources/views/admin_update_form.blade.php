<!-- Last Name: Shah
First name: Akshat
UTA ID: 1001744567 -->
<!DOCTYPE html>
<html>
<head>
	<title>Update Users</title>
	<link rel="stylesheet" type="text/css" href="../css/app.css">
	<link rel="stylesheet" href="../font-awesome/4.2.0/css/font-awesome.min.css"/>
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
			<a href="/admin_users_func">Users</a>
		</div>
	</div>
	<div class="main-body">
		<div class="body-header">
			<h1>Update Users</h1>
		</div>
		<div class="form-data">
			<form action="{{URL::to('/update_users')}}" method="post" class="form-add-course">
				<table>
					<tr>
						<td>Name</td>
						<td><input type="text" name="name"></td>
					</tr>
					<tr>
						<td>Email ID</td>
						<td><input type="email" name="email_id"></td>
					</tr>
					<tr>
						<td>User ID</td>
						<td><input type="text" name="user_id"></td>
						<input type="hidden" name="_token" value="{{csrf_token()}}">
					</tr>
					<tr>
						<td>Role</td>
						<td><select name="role">
							<option value="student">student</option>
							<option value="staff">Staff</option>
						</select></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" class="button-form"></td>
					</tr>
				</table>
			</form>
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