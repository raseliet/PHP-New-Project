<?php

session_start();


require 'functions/file.php';

if (!empty($_SESSION)) {
    //prisijunges

    $users = file_to_array('data/users.txt');
    foreach ($users as $user) {
        if ($user['email'] = $_SESSION['email']) {
            $full_name = $user['full_name'];
        }
    }

    $h1_text = "Sveikas atvykes, $full_name";
} else {
    $h1_text = 'Jus esate neprisijunges';
}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>INDEX</title>

    </head>

    <style>
        .container {
            display: flex;
            margin: 50px 0 0 0;
            padding: 20px 0 0;
            justify-content: left;
        }
        body {
            background-image: url(https://media1.giphy.com/media/p1T5dtR0vhtXq/source.gif);
            background-size: cover;
        }
        div {
            display: inline-block;

        }

    </style>

    <body>
        <?php require 'navigation.php'; ?>
        <div class="container">

        </div>
        <h1><?php print $h1_text; ?></h1>


    </body>
</html>
