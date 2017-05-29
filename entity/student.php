<?php
	class Student{

		private $id;
		private $firstName;
		private $lastName;
		private $email;

		function __construct($id, $firstName, $lastName, $email){
			$this->id = $id;
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->email = $email;
		}

		function setId($id){
			$this->id = $id;
		}

		function getId(){
			return $this->id;
		}

		function setFirstName($firstName){
			$this->firstName = $firstName;
		}

		function getFirstName(){
			return $this->firstName;
		}

		function setLastName($lastName){
			$this->lastName = $lastName;
		}

		function getLastName(){
			return $this->lastName;
		}

		function setEmail($email){
			$this->email = $email;
		}

		function getEmail(){
			return $this->email;
		}

	}

?>