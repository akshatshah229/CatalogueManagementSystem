<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function store(request $data)
    {
    	// print_r($data->input());
    	$name = $data->input('name');
    	$email = $data->input('email_id');
    	$password = $data->input('password');
    	$c_password = $data->input('c_password');
    	$role = $data->input('role');
    	if($password == $c_password){
	    	if ($role == 'student') {
	    		DB::insert('insert into students(id,name,email_id,password) values(?,?,?,?)',[null,$name,$email,$password]);
	    		return view('signin');
	    	}
	    	elseif ($role == 'staff') {
	    		DB::insert('insert into staff(id,name,email_id,password) values(?,?,?,?)',[null,$name,$email,$password]);
	    		return view('signin');
	    	}
	    	elseif ($role == 'admin') {
	    		DB::insert('insert into admins(id,name,email_id,password,created_at,updated_at) values(?,?,?,?,?,?)',[null,$name,$email,$password,null,null]);
	    		return view('signin');
	    	}
	    }
	    else
	    {
	    	echo "Password Don't Match";

	    }	
    }

    public function home(request $data)
    {
    	
    	$email = $data->input('email_id');
    	$password = $data->input('password');
    	$student = DB::select('select * from students where email_id = ? and password  = ?',[$email,$password]);
    	$staff = DB::select('select * from staff where email_id = ? and password  = ?',[$email,$password]);
    	$admin = DB::select('select * from admins where email_id = ? and password  = ?',[$email,$password]);

    	if(count($student))
    	{	
    		$request = $student[0]->id;
    		$data->session()->put('student_session',$request);
    		return view('student_home');
    	}
    	else if (count($staff)) {
    		$request = $staff[0]->id;
    		$data->session()->put('staff_session',$request);
    		return view('staff_home');
    	}
    	else if (count($admin)) {
    		$request = $admin[0]->id;
    		$data->session()->put('admin_session',$request);
    		return view('admin_home');
    	}
    	else
    	{
    		echo 'No users Found';
    	}
    }

    public function add_courses(request $data)
    {
    	$course_name = $data->input('course_name');
    	$department = $data->input('department');
	    $professor = $data->input('professor');
	    $semester = $data->input('semester');
	    $staff = DB::select('select id from staff where name = ?',[$professor]);
	    $staff_id =  $staff[0]->id;
	    DB::insert('insert into courses(id,course_name,department,professor,semester,staff_id) values(?,?,?,?,?,?)',[null,$course_name,$department,$professor,$semester,$staff_id]);
	    return view('staff_home');
    }

    public function choose_course()
    {
    	$data = DB::select('select * from courses');
    	return view('student_list_of_courses',['data'=>$data]);
    }

    public function enrolled_student(request $data)
    {
    	$course_name = $data->input('course_name');
    	$department = $data->input('department');
    	$course_id = $data->input('course_id');
    	$semester = $data->input('semester');
    	$id = $data->session()->get('student_session');
    	$res1 = DB::select('select id from courses where semester = ? and id = ? and department = ? and course_name = ?',[$semester, $course_id, $department, $course_name]);
    	if(empty($res1))
    	{
    		echo "No such Course Found";
    	}
    	else
    	{
    		$res2 = DB::select('select * from coursestudents where semester = ? and course_id = ? and course_name = ? and department = ?',[$semester,$course_id,$course_name,$department]);
    		if(empty($res2))
    		{
    			DB::insert('insert into coursestudents(course_id, course_name, student_id, enrolled, semester, department) values(?,?,?,?,?,?)',[$course_id,$course_name,$id,'1',$semester,$department]);
    			return view('student_home');
    		}
    		else
    		{
    			echo "You are already added to the course!";
    		}
    	}
	}

	public function enrolled_courses()
	{	
		$id = session()->get('student_session');
		$res1 = DB::select('select * from coursestudents where student_id = ? and enrolled = ?',[$id,'1']);
		return view('student_enrolled_courses',['data'=>$res1]);
	}

	public function feedback_courses()
	{
		$id = session()->get('student_session');
		$res1 = DB::select('select * from coursestudents where student_id = ? and enrolled = ? and semester !=?',[$id,'1','spring 2021']);
		echo count($res1);
		return view('student_feedback',['data'=>$res1]);
	}

	public function feedbackdb(request $data)
	{
		$course_id = $data->input('course_id');
		$feedback = $data->input('feedback');
		$student_id = session()->get('student_session');
		$res = DB::select('select staff_id, course_name from courses where id = ?',[$course_id]);
		$staff_id = $res[0]->staff_id;
		$course_name = $res[0]->course_name;
		$res1 = DB::insert('insert into feedback(student_id,staff_id,course_id,course_name,feedback) values(?,?,?,?,?)',[$student_id,$staff_id,$course_id,$course_name,$feedback]);
		return view('student_home');
	}

    public function upcoming_courses()
    {
        $id = session()->get('staff_session');
        $res = DB::select('select * from courses where staff_id = ? and semester = ?',[$id,'spring 2021']);
        return view('staff_upcoming_courses',['data'=>$res]);
    }

    public function update_course(request $data)
    {
        $course_id = $data->input('course_id');
        $course_name = $data->input('course_name');
        $department = $data->input('department');
        $professor = $data->input('professor');
        $semester = $data->input('semester');

        DB::update('update courses set course_name = ?, department = ?, professor = ?, semester = ? where id = ?',[$course_name,$department,$professor,$semester,$course_id]);
        return view('staff_home');
    }

    public function delete_course(request $data)
    {
        $course_id = $data->input('course_id');
        $course_name = $data->input('course_name');

        DB::delete('delete from courses where id = ? and course_name = ?',[$course_id,$course_name]);
        return view('staff_home');
    }
	
    public function view_courses()
    {
        $id = session()->get('staff_session');
        $res = DB::select('select * from courses where staff_id = ? and semester != ?',[$id, 'spring 2021']);
        return view('staff_view_courses',['data'=>$res]);
    }

    public function view_feedback()
    {
        $id = session()->get('staff_session');
        $res = DB::select('select * from feedback where staff_id = ?',[$id]);
        return view('staff_view_feedback',['data'=>$res]);
    }

    public function admin_users_func()
    {
        $res1 = DB::select('select * from staff');
        $res2 = DB::select('select * from students');

        return view('admin_users',['data'=>$res1,'data1'=>$res2]);
    }

    public function update_users(request $data)
    {
        $role = $data->input('role');
        $name = $data->input('name');
        $email_id = $data->input('email_id');
        $user_id = $data->input('user_id');
        echo $user_id;
        if($role == 'student')
        {
            DB::update('update students set name = ?, email_id = ? where id = ?',[$name,$email_id,$user_id]);
            return view('admin_home');
        }
        else if($role == 'staff')
        {   
            DB::update('update staff set name = ?, email_id = ? where id = ?',[$name,$email_id,$user_id]);
            return view('admin_home');
        }
    }

    public function add_users(request $data)
    {
        $role = $data->input('role');
        $name = $data->input('name');
        $email_id = $data->input('email_id');
        $password = $name.$role;

         if($role == 'student')
        {
            DB::insert('insert into students(id,name, email_id,password) values(?,?,?,?)',[null,$name,$email_id,$password]);
            return view('admin_home');
        }
        else if($role == 'staff')
        {   
            DB::insert('insert into staff(id,name, email_id,password) values(?,?,?,?)',[null,$name,$email_id,$password]);
            return view('admin_home');
        }
    }

    public function delete_users(request $data)
    {
        $role = $data->input('role');
        $name = $data->input('name');
        $user_id = $data->input('user_id');

        if($role == 'student')
        {
            DB::delete('delete from feedback where student_id = ?',[$user_id]);
            DB::delete('delete from coursestudents  where student_id = ?',[$user_id]);
            DB::delete('delete from students where id = ?',[$user_id]);
            return view('admin_home');
        }
        else if($role == 'staff')
        {   
            DB::delete('delete from feedback where staff_id = ?',[$user_id]);
            DB::delete('delete from courses  where staff_id = ?',[$user_id]);
            DB::delete('delete from staff where id = ?',[$user_id]);
            return view('admin_home');
        }
    }
}

