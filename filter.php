<?php
if(filter_has_var(INPUT_POST, 'data')){
    $email = $_POST['data'];

    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email.'<br>';
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'email is valid';
    }
} else {
    echo 'Email is not valid';
}


    


   
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <button type="submit">Submit</button>
</form>