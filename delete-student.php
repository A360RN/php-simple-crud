<?php
	include('model/student-dao.php');
	$id = $_POST['id'];

	$dao = new StudentDao();

	$dao->deleteStudent($id);

	header("Location:index.php");
	exit;
?>