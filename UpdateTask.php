<?php

// Include SqlQueries.php.
include 'SqlQueries.php';

// Create object of SqlQueries Class.
$sql = new SqlQueries();

// Check if the Data is comming from url.
if ($_GET['task_id'] != "") {
  // Storing task id into variable.
	$task_id = $_GET['task_id'];
  // Sql Query to get data from database.
	$getDataSql = "SELECT * FROM `task` WHERE `task_id` = $task_id";
  // Run sql query to get data from database.
	$data = $sql->displayData($getDataSql);
  // Taking data and storing in task.
  foreach ($data as $row) {
    $task = $row['task'];
  }
}

// Check if the Form is submitted or not.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Storing task into variable.
  $task = $_POST['task'];
  // Sql Query to update data into database.
	$updateData = "UPDATE `task` SET `task` = '$task' WHERE `task_id` = $task_id";
  // Run sql query to update data to database.
	$sql->runQuery($updateData);
  // Redirecting to home.
	header('location:/home');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./Css/Style.css" />
  <title>Document</title>
</head>
<body>
  <nav>
	<a class="heading" href="#">TODO App</a>
</nav>
<div class="container">
	<div class="input-area">
    <form method="POST" action="">
      <input type="text" name="task"value="<?php echo $task; ?>" required />
      <button class="btn" name="add">Update Task</button>
    </form>
	</div>
</div>
</body>
</html>
