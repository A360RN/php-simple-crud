<?php include($_SERVER['DOCUMENT_ROOT'].'/crud-students/entity/student.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/crud-students/database.php'); ?>
<?php
	

	class StudentDao{
			
		public function listStudents(){
			$conn = getConnection();

			$stmt = $conn->query('SELECT * FROM student');
			$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

			return $results;
		}

		public function addStudent($s){
			try {
				$conn = getConnection();
			
				$stmt = $conn->prepare("INSERT INTO student(first_name,last_name,email) VALUES(:field1,:field2,:field3)");
				$stmt->execute(array(':field1' => $s->getFirstName(), ':field2' => $s->getLastName(), ':field3' => $s->getEmail()));
			} catch (Exception $e) {
				
			}
		}

		public function getStudent($id){
			$conn = getConnection();

			$stmt = $conn->prepare("SELECT * FROM student WHERE id=:id");
			$stmt->execute(array(':id' => $id));

			$result = $stmt->fetch(PDO::FETCH_ASSOC);

			return $result;
		}

		public function editStudent($s){
			$conn = getConnection();

			$stmt = $conn->prepare("UPDATE student SET first_name = :field1, last_name = :field2, email = :field3 WHERE id=:id");
			$stmt->execute(array(':id' => $s->getId(), ':field1' => $s->getFirstName(), ':field2' => $s->getLastName(), ':field3' => $s->getEmail()));
		}

		public function deleteStudent($id){
			$conn = getConnection();

			$stmt = $conn->prepare("DELETE FROM student WHERE id=:id");
			$stmt->execute(array(':id' => $id));
		}
	}
?>