<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Step 8: Booleans - True/False</title>
</head>
<body>
    <ul>
        <?php foreach($task as $key=>$value): ?>
            <li><strong><?php echo ucfirst($key); ?></strong> <?php echo $value; ?></li>
        <?php endforeach; ?>
    </ul>
    <ul>
        <li><strong>Name : </strong> <?php echo $task["title"]; ?> </li>
        <li><strong>Due Date : </strong> <?php echo $task["due"] ?> </li>
        <li><strong>Assign To : </strong> <?php echo $task["assign_to"]; ?> </li>
        <li><strong>Status : </strong>  <?php echo $task["completed"] ? "Complete" : "Incompleted" ; ?>  </li>
    </ul>
</body>
</html>