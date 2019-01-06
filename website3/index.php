<?php

    if(filter_has_var(INPUT_POST, 'submit')){
        echo 'Submitted';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div>
    <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    </nav>

    <div class="container">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="">Messaage</label>
                <input type="text" name="message" class="form-control" value="">
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            
        </form>
    </div>
</div>
    
</body>
</html>