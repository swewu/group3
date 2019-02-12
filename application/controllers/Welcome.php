<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$this->load->view('login');
	}

	public function student()
	{
		$this->load->view('student');
	}

	public function studentinsert()
	{
		$this->load->view('student');
	}

	public function teacher()
	{
		$this->load->view('teacher');
	}

	public function deleted()
	{
		$this->load->view('teacher');
	}


	public function inserthis(Type $var = null)
	{
		$this->load->view('checksession');
		$this->load->view('insertsubjecthistory');
	}

	public function getdata()
	{
 			$subjecthistory = $this->getsubjecthistory();
			$data['subjecthistory'] = $subjecthistory;
			$this->load->view('checksession');
			$this->load->view('showdata',$data);
	}

	public function getsubjecthistory(){
		$this->load->model('UserModel');
		$result = $this->UserModel->gethistory();
		return $result;
	}


	public function checkLogin(){
		$id  = isset($_GET['username'])?$_GET['username']:"";
		$pass = isset($_GET['password'])?$_GET['password']:"";
		$this->load->model('UserModel');
		$result = $this->UserModel->Login($id,$pass);
		if($result){
			if($_SESSION['role'] == "Student"){
				redirect('Welcome/student');
			}else if($_SESSION['role'] == "Lecture"){
				redirect('Welcome/teacher');
			}
		}
			
	}


	public function insert(){
		// $studentid = isset($_GET['studentid'])?$_GET['studentid']:"";
		$studentid  = isset($_POST['studentid'])?$_POST['studentid']:"";
		$coursename = isset($_POST['coursename'])?$_POST['coursename']:"";
		$name = isset($_POST['name'])?$_POST['name']:"";
		$courseid = isset($_POST['courseid'])?$_POST['courseid']:"";
		$year = isset($_POST['year'])?$_POST['year']:"";
		$term = isset($_POST['term'])?$_POST['term']:"";
		$grade = isset($_POST['grade'])?$_POST['grade']:"";
		// $pass = isset($_GET['password'])?$_GET['password']:"";
		$this->load->model('UserModel');
		$result = $this->UserModel->insert($studentid, $coursename,$name,  $courseid, $year, $term, $grade);
		if($result){
			if($result){
				echo "<script>alert('บันทึกสำเร็จ');
					window.location.href='getdata';
					</script>";
					$this->load->view('showdata');
			}else{
				echo "<script>alert('บันทึกไม่สำเร็จ');
					window.location.href='getdata';
					</script>";
					$this->load->view('student');
			}
			
			
		}
	}

	// public function delete(){
	// 	$historyid  = isset($_GET['historyid'])?$_GET['historyid']:"";
	// 	// $pass = isset($_GET['password'])?$_GET['password']:"";
	// 	$this->load->model('UserModel');
	// 	$isCheck = $this->UserModel->check($historyid);
	// 	if($isCheck == false){
	// 		$result = $this->UserModel->delete($historyid);
	// 		if($result == true){
	// 			$this->load->view('showdata');
				
				
	// 		}
	// 	}
	// }



	// public function update(){
	// 	$historyid  = isset($_POST['historyid'])?$_POST['historyid']:"";
	// 	$courseid  = isset($_POST['courseid'])?$_POST['courseid']:"";
	// 	$term  = isset($_POST['term'])?$_POST['term']:"";
	// 	$year  = isset($_POSTGET['year'])?$_POST['year']:"";
	// 	$grade = isset($_POST['grade'])?$_POST['grade']:"";
	// 	$studentid  = isset($_POST['studentid'])?$_POST['studentid']:"";
	// 	// $pass = isset($_GET['password'])?$_GET['password']:"";
	// 	$this->load->model('UserModel');
	// 	// $isCheck = $this->UserModel->check($historyid);
	// 	// if($isCheck == false){
	// 		$result = $this->UserModel->updateeditsubject($historyid, $studentid, $courseid, $year, $term, $grade);
	// 		if($result == true){
	// 			echo "Success";
	// 			return alert("success");
	// 		}
	// }


	public function updateeditsubject()
	{
		$historyid  = isset($_POST['historyid'])?$_POST['historyid']:"";
		$studentid  = isset($_POST['studentid'])?$_POST['studentid']:"";
		$courseid = isset($_POST['courseid'])?$_POST['courseid']:"";
		$year = isset($_POST['year'])?$_POST['year']:"";
		$term = isset($_POST['term'])?$_POST['term']:"";
		$grade = isset($_POST['grade'])?$_POST['grade']:"";
		$role = $_SESSION['role'];
		$this->load->model('UserModel');
		if($role == 1){
			$result = $this->UserModel->updateeditsubject($historyid, $studentid, $courseid, $year, $term, $grade);
		}else{
			$result = $this->UserModel->updateeditsubjectteacher($historyid, $studentid, $courseid, $year, $term);
		}
		if($result){
			echo "<script>alert('แก้ไขข้อมูลสำเร็จ');
				window.location.href='getdata';
				</script>";
		}
		else{
			echo "<script>alert('แก้ไขข้อมูลไม่สำเร็จ');
				window.location.href='getdata';
				</script>";
		}
	}

	


}
