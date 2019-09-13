<?php
$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);

if ($grizai_velai && !$grizai_isgeres) {
   $pasekmes='Grizai velai';
}else if($grizai_velai && $grizai_isgeres) {
   $pasekmes='Grizai velai ir isgeres';
}else if(!$grizai_velai && $grizai_isgeres){
    $pasekmes='Grizai isgeres';
}else{
    $pasekmes='Nieko nepadarei';
}

$aplinkybes='Situacija: ' . $pasekmes;

?>

<html>
    <head>
        <title>Buitinė skaičiuoklė</title>  
    </head>
    <body>
        <h1>Buitine skaiciuokle </h1>
        <h2><?php print $aplinkybes; ?></h2>
    </body>
</html>