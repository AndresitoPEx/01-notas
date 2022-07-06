<?php

use Andres\Notas\models\Note;

$notes = Note::getAll();

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HOME</h1>

    <?php
    
    foreach($notes as $note){
        echo "<div>{$note->getTitle()}</div>";
    }
    
    ?>
    
</body>
</html>