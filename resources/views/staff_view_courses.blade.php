<!-- Last Name: Shah
First name: Akshat
UTA ID: 1001744567 -->
<!DOCTYPE html>
<html>
<head>
	<title>View Courses</title>
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
			<a href="staff_home">Home</a>
			<a href="staff_about">About</a>
			<a href="staff_forum">Forum</a>
			<a href="/upcoming_courses">Upcoming Courses</a>
			<a href="/view_courses">View Courses</a>
			<a href="/view_feedback">View Feedback</a>
		</div>
	</div>
	<div class="main-body">
		<div class="body-header">
			<h1>Courses</h1>
		</div>
		<div class="student-container">
			<div class="staff-right-container">
				@foreach ($data as $course_data)
				<div class="staff-image-container">
					<img src='../images/our_courses.jpg'>
					<h5>{{$course_data->department}} {{$course_data->id}} - {{$course_data->course_name}}</h5>
				</div>
				@endforeach
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