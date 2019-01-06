<?php
    //message vars
    $msg = '';
    $msgClass = '';
    if(filter_has_var(INPUT_POST, 'submit')){

        // to test if submitted
        //echo 'Submitted';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        //check required fields
        if(!empty($email) && !empty($name) && !empty($message)){
            //echo 'Passed';
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                //failed
                $msg = 'Please a valid email';
                $msgClass = 'alert-danger';
            } else {
                //passed
                echo 'passed';
            }
        } else {
            $msg = 'Please fill in all fields';
            $msgClass = 'alert-danger';
        }
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
        <?php if($msg != ''): ?>
            <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
        <?php endif; ?>
            
            
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
                <textarea name="message"  class="form-control"></textarea>
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            
        </form>
    </div>
</div>
    
</body>
</html>