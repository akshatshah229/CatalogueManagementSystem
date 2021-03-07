<!-- Last Name: Shah
First name: Akshat
UTA ID: 1001744567 -->
<!DOCTYPE html>
<html>
<head>
	<title>Enrolled Courses</title>
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
			<a href="student_forum.">Forum</a>
			<a href="/choose_course">List of Courses</a>
			<a href="/feedback_courses">Feedback</a>
		</div>
	</div>
	<div class="main-body">
		<div class="body-header">
			<h1>Enrolled Courses</h1>
		</div>
		<div class="student-container">
			<div class="left-container">
				<ul class="li-list-student" style="list-style-type: none;">
					<li class="li-list-student"><a href="/choose_course">Choose Your Course</a></li>
					<li class="li-list-student"><a class="active" href="student_enrolled_courses">Enrolled Courses</a></li>
					<li class="li-list-student"><a href="student_requested_courses">Requested Courses</a></li>
				</ul>
			</div>
			<div class="container-1">
				<div class="right-container">
					@foreach ($data as $course_data)
					<div class="image-container">
						<img src='../images/our_courses.jpg'>
						<h5>{{$course_data->department}} {{$course_data->course_id}} - {{$course_data->course_name}}</h5>
					</div>
					@endforeach
				</div>
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