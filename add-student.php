<?php 
	include('model/student-dao.php');

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];

	$dao = new StudentDao();

	$student = new Student(0, $firstName, $lastName, $email);

	$dao->addStudent($student);

	header('Location:index.php');
	exit;
?>