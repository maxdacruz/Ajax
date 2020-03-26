<?php

require_once 'database.php';

$errors = array();

if (!empty($_POST)) {

	// Basics validations
	if (empty($_POST['title'])) {
		$errors[] = '<p style="color:red" > Title is mandatory </p>';
	}

	if (empty($_POST['year'])) {
		$errors[] = '<p style="color:red" > Year of release is mandatory </p>';
  }
	if (empty($_POST['director'])) {
		$errors[] = '<p style="color:red" >Select a Director </p>';
  }
  

	if (count($errors) === 0) {

		// If no errors, insert into DB
		require_once 'database.php';
		// Open a connection to the DBMS
		$connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

		$query = "INSERT INTO movies(title, realease_date, director_id, description) 
		VALUES('" . $_POST['title'] . "', '" . $_POST['year'] . "',".$_POST['director'].",'".$_POST['descriptions']."' )";

		// Send an SQL request to our DB
		$result_query = mysqli_query($connect, $query);

		if ($result_query) {
			echo '<p style="color:green" >Movie successfully addded ! </p>';
		} else {
			echo ' <p style="color:red" > Error inserting into the DB </p>';
		}
	} else {
		echo implode('', $errors);
	}
}