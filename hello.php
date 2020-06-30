<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php say hello</title>
</head>
<body>
    <?php echo 'Hello, world' ?>
    <form action="hello.php" method="POST">
        Your name: <input type="text" name="user"/>
        <br/>
        <button type="submit">Say Hello</button>
    </form>
    
    <?php
        print "Hello, ";
        print $_POST['user'];
        print "!";
    ?>
</body>
</html>