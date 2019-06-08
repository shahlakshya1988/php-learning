<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Step 9: Conditionals</title>
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
    <ul>
        <li><strong>Name : </strong> <?php echo $task["title"]; ?> </li>
        <li><strong>Due Date : </strong> <?php echo $task["due"] ?> </li>
        <li><strong>Assign To : </strong> <?php echo $task["assign_to"]; ?> </li>
        <li><strong>Status : </strong>  <?php 
            if($task["completed"]){
                echo "Task Is Completed &#9917;";
            }else{
                echo "Task Is Incomplete &#9940;";
            }
        ?>  </li>
        <li>
            <strong>Status : </strong>
            <?php
                if(!$task["completed"]):?>
                    Task Is Completed &#9917;
        <?php else: ?>
            Task Is Incomplete &#9940;
        <?php endif; ?>
        </li>
    </ul>
</body>
</html>