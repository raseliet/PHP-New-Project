<?php
$laikas = date('s');


$laikas_reversed = 59 - $laikas;





?>
<html>
    <head> 
        <meta charset="UTF - 8">
        <title>Bomba su Css ir kintamaisiais</title>
        <style>
            .square {
                height: 200px;
                width: 200px;
                background-color: #555;
                text-align: center;
            }
            
            .time0 {
                background-color: red;
            }
                    
          
        </style>
    </head>
    <body>
        <div class="square time<?php print $laikas_reversed; ?>">
            <h1><?php print $laikas_reversed; ?></h1>
            
        </div>
        
    </body>
</html> 

      
        
   
    
    