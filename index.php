<?php

var_dump($_POST);

$anketa = [];



if (isset($_POST['submit'])) {
    $anketa['name'] = 'Vardas: ' . $_POST['name'];
    $anketa['surname'] = 'Pavardė: ' . $_POST['surname'];
    $anketa['age'] = 'Amžius: ' . $_POST['age'] . 'm.';
    $anketa['lygis'] = 'Lygis: ' . $_POST['lygis'];
    $anketa['text'] = $_POST['name'] . ', kuriam yra ' . $_POST['age'] . ' metai, atsidūrė anketoje ir jis yra ' . lcfirst($_POST['lygis']);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sukurti anketą</title>
        <style>
            img {
                width: 200px;
            }
        </style>
    </head>
    <body>
        <h2>Pažymėjimas</h2>
        <br>
        <img src="http://www.radicalcompliance.com/wp-content/uploads/2018/06/certifications.jpg" alt="">
        <br>
        <form method="post">
            <label>
                <span>Vardas:</span> 
                <input type="text" placeholder="Vardas" name="name" required>
            </label>


            <label>
                <span>Pavardė:</span> 
                <input type="text" placeholder="Pavardė" name="surname" required>
            </label>

            <label>
                <span>Amžius:</span> 
                <input type="number" placeholder="23" name="age">
            </label>

            <label>
                <span>Kaip vertini savo PHP žinias?</span> 
                <select id="lygis" name="lygis">
                    <option value="pradedantysis" selected>Pradedantysis</option>
                    <option value="pažengęs">Pažengęs</option>
                    <option value="profesionalas">Profesionalas</option>

                </select>

                <input type="submit" placeholder="Pateikti" name="submit" value="Patvirtinti">
            </label>
        </form> 
        <?php foreach ($anketa as $input): ?> 
            <p><?php print $input; ?></p>
        <?php endforeach; ?>
    </body>
</html>