# php-simple-crud
Simple CRUD app using PHP and MySQL

# DATABASE SETUP

CREATE DATABASE student;

CREATE TABLE student(){
  id INT(11) auto_increment,
  first_name VARCHAR(60),
  last_name VARCHAR(60),
  email VARCHAR(100),
  primary key(id)
};
