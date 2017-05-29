<?php include 'includes/header.php' ?>
<?php include 'model/student-dao.php' ?>
	<div class="jumbotron">
		<div class="container">
			<h1>Hello Fellow User!</h1>
			<p>Simple Crud App</p>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-xs-offset-3">
				
				<table class="table table-striped table-responsive">
					<thead>
						<tr>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Email</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						
							<?php
								$studentDao = new StudentDao();
								$list = $studentDao->listStudents();

							?>
							<?php
								foreach($list as $row):
							?>
								<tr>
									<td><?php echo $row['first_name']; ?></td>
									<td><?php echo $row['last_name']; ?></td>
									<td><?php echo $row['email']; ?></td>
									<td>
										<div class="row">
											<div class="col-xs-4">
												<form class="form-inline" method="POST" action="edit-student-form.php">
													<input name="id" type="hidden" value="<?php echo $row['id']; ?>">
													<button class="btn btn-success">Edit</button>
												</form>
											</div>
											<div class="col-xs-4">
												<form class="form-inline" method="POST" action="delete-student.php">
													<input name="id" type="hidden" value="<?php echo $row['id']; ?>">
													<button class="btn btn-danger">Delete</button>
												</form>
											</div>
										</div>										
									</td>
								</tr>
							<?php endforeach; ?>
					</tbody>
				</table>

				<div class="col-xs-6 col-xs-offset-8">
					<a href="add-student-form.php" class="btn btn-primary">Add Student</a>
				</div>
			</div>
		</div>
	</div>

<?php include 'includes/footer.php' ?>