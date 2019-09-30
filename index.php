<?php

var_dump($_POST);
$value = 0;


if (isset($_POST['enter'])) {
    $value = $_POST['enter'];
    $value ++;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

    </head>
    <body>
        <form method="post">
            <h1>Give it to me!</h1>

            <input type="submit" name="enter" value="<?php print $value; ?>">


        </form> 
    </body>
</html>
