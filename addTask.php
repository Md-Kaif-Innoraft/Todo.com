<?php

// Include SqlQueries.php.
include 'SqlQueries.php';

// Create object of SqlQueries Class.
$sql = new SqlQueries();

// Check if the Form is submitted or not.
if (isset($_POST['add'])) {
  // Check if the task is not empty.
	if ($_POST['task'] != "") {
    // Storing task into variable.
		$task = $_POST['task'];
    // Sql Query to insert data into database.
		$addtasksSql = "INSERT INTO `task` ( `task`, `status`) VALUES ('$task', 'Pending')";
    // Run sql query to add data to database.
    $sql->insertData($addtasksSql);
    // Redirecting to home.
		header('location:/home');
	}
}
