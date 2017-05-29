<?php include 'includes/header.php'; ?>


<div class="container">
	<div class="row">
		<form action="add-student.php" method="POST" class="form-horizontal">
			<div class="form-group">
				<label class="col-xs-2 control-label" for="">First Name</label>
				<div class="col-xs-10">
					<input class="form-control" type="text" placeholder="First Name" name="firstName">
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-2 control-label" for="">Last Name</label>
				<div class="col-xs-10">
					<input class="form-control" type="text" placeholder="Last Name" name="lastName">
				</div>
			</div>
			<div class="form-group">
				<label class="col-xs-2 control-label" for="">Email</label>
				<div class="col-xs-10">
					<input class="form-control" type="email" placeholder="Email" name="email">
				</div>
			</div>
			<div class="col-xs-12 text-center">
				<button class="btn btn-lg btn-primary" type="submit">Submit</button>
			</div>
		</form>
	</div>
</div>

<?php include 'includes/footer.php'; ?>