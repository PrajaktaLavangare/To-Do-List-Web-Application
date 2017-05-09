<html>
<head>
<link rel="stylesheet" type="text/css" href="add.css">
</head>
<body>
  <form action="index.php" method="post">
    <input type="hidden" name="task_id" value="<?php echo $_POST['task_id']?>">
    <input class="form-control" type="text" name="new_todo_item" value="<?php echo $_POST['todo_item']?>">
    <input class="form-control" type="date" name="new_date" value="<?php echo $_POST['date']?>">
    <input class="form-control" type="time" name="new_time" value="<?php echo $_POST['time']?>">
    <input type="hidden" name="action" value="edit_task">
    <input type="submit" value="Edit">
  </form>
</body>
</html>
