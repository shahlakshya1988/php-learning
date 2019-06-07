<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Step 4: PHP And HTML</title>
    <style media="screen">
        *{
            margin:0px;
            padding:0px;

        }
        html,
        body{
            font-size: 10px;
        }
        header{
            background:#eee;
            padding:2rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1><?php echo "Hello, World"; ?></h1>
        <h1><?php $name = $_GET["name"]; echo htmlspecialchars($name); ?></h1>
    </header>
</body>
</html>
