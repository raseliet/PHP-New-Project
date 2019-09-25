<?php
$style_randomiser = rand(0, 1);
$story_randomiser = rand(0, 1);

$short_story = '';
$short_story_1 = 'Pakalikas manyje: Viena diena kaip zaibas is giedro dangaus trenkia zinia, kad Gru turi niekad nematyta broli dvyni '
        . 'Dru! Broliu susitikimas is pradziu pradziugina Gru, taciau veliau privercia sunerimti – nes Dru lyg apsestas skatina broleli '
        . 'prisijungti prie dar vieno darbelio. Nors piktadariska Gru prigimtis likusi praeityje, taciau kazkas ji traukia atgal prie nusikalteliskumo. '
        . '. Vejamas nuotykiu troskimo, Gru leidziasi brolio ikalbamas ir broliai – su pakaliku pagalba, zinoma – ima planuoti amziaus nusikaltima.';
$short_story_2 = 'Blogieji Pakalikai yra purpurines spalvos, kadangi spalvu paleteje tai – priesinga geltonai spalva.
Pakalikų kalba – ispanu, anglu, prancuzu, italu, rusu ir korejieciu kalbu misinys.';

if ($story_randomiser === 0) {
    $short_story = $short_story_1;
} else {
    $short_story = $short_story_2;
}
?>

<!DOCTYPE html>
<html>
    <style>
        .bg{
            width:100%;
            height:100%;

        }
        .bg-0 {
            background-image:url("https://i.pinimg.com/originals/70/ba/bf/70babf7ff50c7d8a91a594f4f4278417.jpg");
            color: black;
        }

        .bg-1 {
            background-image: url("https://hdwallpaperim.com/wp-content/uploads/2017/08/24/102028-minions-minimalism-black-Pulp_Fiction-bananas-Pulp_Fiction_parody-parody-mix_up-748x468.jpg");
            color: white;

            
        }

    </style>
    <body class="bg bg-<?php print $style_randomiser; ?>">

        <h1>Mes esame MINIONAI!</h1>
        <h2>Why we made PZ2AMAT?</h2>
        <p><?php print $short_story; ?></p>

    </body>
</html>