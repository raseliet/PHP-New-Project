<?php

var_dump($_POST);
$value = 0;


if (isset($_POST['enter'])) {
    $value = $_POST['enter'] + 1;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Formos</title>
        <style>
            img {
                width: 50px;
            }
        </style>
        <meta charset="UTF-8">

    </head>
    <body>
        <form method="post">

            <input type="submit" name="enter" value="<?php print $value; ?>">

        </form> 

        <?php for ($i = 0; $i < $value; $i++): ?>

            <img src="https://images-na.ssl-images-amazon.com/images/I/51Ps3zmCS4L._SX322_BO1,204,203,200_.jpg" alt="">
        <?php endfor; ?>
    </body>
</html>
