<?php include 'includes/header.php'; ?>
<?php
	
	include('model/student-dao.php');

	$id = $_POST['id'];
	$dao = new StudentDao();

	$result = $dao->getStudent($id);
?>
	<div class="container">
		<div class="row">
			<form action="edit-student.php" method="POST" class="form-horizontal">
				<input type="hidden" value="<?php echo $id;?>" name="id" >
				<div class="form-group">
					<label class="col-xs-2 control-label" for="">First Name</label>
					<div class="col-xs-10">
						<input class="form-control" type="text" value="<?php echo $result['first_name'] ?>" name="firstName">
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-2 control-label" for="">Last Name</label>
					<div class="col-xs-10">
						<input class="form-control" type="text" value="<?php echo $result['last_name'] ?>" name="lastName">
					</div>
				</div>
				<div class="form-group">
					<label class="col-xs-2 control-label" for="">Email</label>
					<div class="col-xs-10">
						<input class="form-control" type="email" value="<?php echo $result['email'] ?>" name="email">
					</div>
				</div>
				<div class="col-xs-12 text-center">
					<button class="btn btn-lg btn-primary" type="submit">Submit</button>
				</div>
			</form>
		</div>
	</div>


<?php include 'includes/footer.php'; ?>