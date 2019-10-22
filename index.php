<?php 

session_start();

require 'functions/form/core.php';
require 'functions/html/generators.php';
require 'functions/file.php';

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
        <h1></h1>
        <h1></h1>

    </body>
</html>
