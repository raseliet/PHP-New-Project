<?php
var_dump($_POST);
$answer = 0;

function square($x) {
    return $x ** 2;
}

if (isset($_POST['enter'])) {
    $answer = square($_POST['skaicius']);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formos</title>
    </head>
    <body>
        <form method="post">
            <span>Ką pakelti kvadratu?</span>
            <input type="number" name="skaicius" required>
            <input type="submit" name="enter">
            <br>
            <label>Atsakymas: <?php print $answer; ?> </label>
        </form> 
    </body>
</html>
