<?php
    if(isset($_GET['name'])){
        echo $_GET['name'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My website</title>
</head>
<body>
    <form method="GET" action="get_post.php">
        <div>
            <label>Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">email</label><br>
            <input type="text" name="email">
        </div>
        <input type="submit" value="submit">
    </form>
</body>
</html>