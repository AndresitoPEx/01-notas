<?php

use Andres\Notas\models\Note;

if (count($_POST) > 0) {
    $title = isset($_POST['title']) ?? '';
    $content = isset($_POST['content']) ?? '';

    $note = new Note($title, $content);

    $note->save();
}
print_r($title);//<-- esto es para que no se muestre el error de undefined variable
print_r($content);//<-- esto es para que no se muestre el error de undefined variable

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE NEW NOTE</title>
</head>

<body>
    <h1>CREATE NEW NOTE</h1>
    <form action="?view=create" method="POST">
        <label for="title">Title</label>

        <input type="text" name="title" placeholder="Title">

        <label for="content">Content</label>

        <textarea name="content" id="" cols="30" rows="10"></textarea>

        <input type="submit" value="Create Note">
    </form>

</body>

</html>