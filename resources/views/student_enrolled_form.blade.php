<!-- Last Name: Shah
First name: Akshat
UTA ID: 1001744567 -->
<!DOCTYPE html>
<html>
<head>
	<title>Enroll Courses</title>
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
			<a href="student_home">Home</a>
			<a href="student_about">About</a>
			<a href="student_forum">Forum</a>
			<a href="/choose_course">List of Courses</a>
			<a href="/feedback_courses">Feedback</a>
		</div>
	</div>
	<div class="main-body">
		<div class="body-header">
			<h1>Enroll Courses</h1>
		</div>
		<div class="form-data">
			<form action="{{URL::to('/enrolled_student')}}" method="post" class="form-add-course">
				<table>
					<tr>
						<td>Course Name</td>
						<td><input type="text" name="course_name"></td>
					</tr>
					<tr>
						<td>Course ID</td>
						<td><input type="text" name="course_id"></td>
					</tr>
					<tr>
						<td>Department</td>
						<td><input type="text" name="department"></td>
					</tr>
					<tr>
						<td>Semester</td>
						<td><input type="text" name="semester"></td>
						<input type="hidden" name="_token" value="{{csrf_token()}}">
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