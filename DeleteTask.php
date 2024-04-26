<?php

// Include SqlQueries.php.
include 'SqlQueries.php';

// Create object of SqlQueries Class.
$sql = new SqlQueries();

// Check if the Data is comming from url.
if ($_GET['task_id']) {
  // Storing task id into variable.
	$task_id = $_GET['task_id'];
  // Sql Query to delete data from database.
	$deletieSql ="DELETE FROM `task` WHERE `task_id` = $task_id";
  // Run sql query to delete data from database.
  $sql->runQuery($deletieSql);
  // Redirecting to home.
	header("location: /home");
}
