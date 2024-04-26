<?php

// Include SqlQueries.php.
include 'SqlQueries.php';

// Create object of SqlQueries Class.
$sql = new SqlQueries();
$i = 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Todo List</title>
<link rel="stylesheet" type="text/css" href="./Css/Style.css" />
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>

<body>
<nav>
	<a class="heading" href="/home">TODO App</a>
</nav>
<div class="container">
	<div class="input-area">
    <form method="POST" action="addTask.php">
      <input type="text" name="task" placeholder="write your tasks here..." required />
      <button class="btn" name="add">Add Task</button>
    </form>
	</div>
	<table class="table">
    <thead>
      <tr>
      <th>SNo.</th>
      <th>Tasks</th>
      <th>Status</th>
      <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <!-- Loop though array to display data. -->
      <?php foreach ($sql->displayData('Select * from `task`') as $row) {
        $i++; ?>
        <tr>
          <td><?php echo $i; ?> </td>
          <td><?php echo $row['task']; ?> </td>
          <td><?php echo $row['status']; ?></td>
          <td>
            <a href="UpdateStatus.php?task_id=<?php echo $row['task_id']; ?>"
            class="btn-completed">✅</a>
            <a href="DeleteTask.php?task_id=<?php echo $row['task_id']; ?>"
            class="btn-remove">❌</a>
            <a href="UpdateTask.php?task_id=<?php echo $row['task_id']; ?>"
            class="Edit-btn">Edit</a>
          </td>
        </tr>
      <?php } ?>
	</tbody>
	</table>
</div>
<script src="./JavaScript/script.js"></script>
</body>

</html>
