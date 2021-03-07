<!-- Last Name: Shah
First name: Akshat
UTA ID: 1001744567 -->
<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<link rel="stylesheet" type="text/css" href="../css/app.css">
	<link rel="stylesheet" href="assets/font-awesome/4.2.0/css/font-awesome.min.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="navbar">
		<div class="topnav">
			<a href="signin">Sign In</a>
			<a href="signup">Sign Up</a>
			<a href="https://www.facebook.com/" class="fafa"><i class="fa fa-facebook-square"></i></a>
			<a href="https://www.instagram.com/" class="fafa"><i class="fa fa-instagram"></i></a>
			<a href="https://www.youtube.com/" class="fafa"><i class="fa fa-youtube-play"></i></a>
		</div>
		<div class="second-topnav">
			<a href="/">Home</a>
			<a href="about">About</a>
			<a href="forum">Forum</a>
			<a href="http://aas4567.uta.cloud/blog/blog/">Blog</a>
		</div>
	</div>
	<div class="main-body">
		<div class="body-header">
			<h1>Sign In</h1>
		</div>
		<div class="form-data">
			<form action="{{URL::to('/home')}}" method="post">
				<table>
					<tr>
						<td>
							Username
						</td>
						<td>
							<input type="email"  name="email_id">
						</td>
					</tr>
					<tr>
						<td>
							Password
						</td>
						<td>
							<input type="password"  name="password">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							
								<input type="submit" value="Login" class="button-form">
							
						</td>
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