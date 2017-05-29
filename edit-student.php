<?php
	include('model/student-dao.php');

	$dao = new StudentDao();
	$id = $_POST['id'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];

	$student = new Student($id, $firstName, $lastName, $email);

	$dao->editStudent($student);

	header("Location:index.php");
	exit;
?>