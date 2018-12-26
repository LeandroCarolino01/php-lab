<?php
    if(filter_has_var(INPUT_POST, 'data')){
        echo 'data found';
    } else {
        echo 'no data';
    }
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <button type="submit">Submit</button>
</form>