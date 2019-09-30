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
        <title>Formos</title>
        <style>
            .bananas {
                display: inline-block;
                width: 330px;
                height: 330px;
                background-image:url("https://images-na.ssl-images-amazon.com/images/I/51Ps3zmCS4L._SX322_BO1,204,203,200_.jpg");
            }
        </style>
        <meta charset="UTF-8">

    </head>
    <body>
        <form method="post">

            <input type="submit" name="enter" value="<?php print $value; ?>">

        </form> 

        <?php for ($i = 1; $i <= $value; $i++): ?>

            <div class="bananas"></div>
        <?php endfor; ?>
    </body>
</html>
