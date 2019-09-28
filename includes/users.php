<?php
include 'database/db_connection.php';
if (isset($_POST['key'])) {



    
	$firstname = $conn->real_escape_string($_POST['firstname']);
	$middlename = $conn->real_escape_string($_POST['middlename']);
	$lastname = $conn->real_escape_string($_POST['lastname']);
	$gender = $conn->real_escape_string($_POST['gender']);
	$birthday = $conn->real_escape_string($_POST['birthday']);
	$password = $conn->real_escape_string($_POST['password']);
	$email = $conn->real_escape_string($_POST['email']);
	$city = $conn->real_escape_string($_POST['city']);
	$street = $conn->real_escape_string($_POST['street']);
	$country = $conn->real_escape_string($_POST['country']);
	$nationality = $conn->real_escape_string($_POST['nationality']);
	$zip_code = $conn->real_escape_string($_POST['zip_code']);
	$contact_number = $conn->real_escape_string($_POST['contact_number']);

    if ($_POST['key'] == 'save') {
		$conn->query("INSERT INTO users (id,firstname, middlename, lastname,gender,birthday,email,password,city,street,country,nationality,zip_code,contact_number) VALUES ('','$firstname', '$middlename', '$lastname','$gender','$birthday','$email','$password','$city','$street','$country','$nationality','$zip_code','$contact_number')");
		exit('added');
	}
}




?>