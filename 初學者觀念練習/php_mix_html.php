<?php

$fruits = ['apple', 'banana', 'orange', 'mango'];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Fruit</title>
    </head>
    <body>

    <h1>Fruit</h1>
    
    <ol>
        <?php foreach ($fruits as $fruit):?>
        <li><?= $fruit?></li>
        <?php endforeach; ?>
    </ol>
    
    </body>
</html>