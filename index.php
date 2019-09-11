<html>
    <head>
        <meta charset="UTF-8">
        <title>Bomb img game, and date()</title>
        <style>
            .bomb-img {
                background-image: url(http://pngimg.com/uploads/bomb/bomb_PNG16.png);
                background-size: cover;
                width: 1<?php print date('s') ;?>px;
                height: 1<?php print date('s') ;?>px;
            }
            
            .bomb-img-00 {
                background-image: url(https://miro.medium.com/max/1005/1*XIajoiQj2tQfdNWZ7_PS5w.jpeg);
                background-size: cover;
                width: 100px;
                height: 100px;
            }
        </style>
    </head>
    <body>
        <div class="bomb-img  bomb-img-<?php print date('s') ;?> "></div>
        <div><?php print date('s'); ?></div>
        
    </body>
</html>




