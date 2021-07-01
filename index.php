<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario</title>
</head>
<body>
    <form action="" method="post">
        <h1>Formulario</h1>
        <input type="text" name="name" placeholder="Nombre" class="form">
        <input type="text" name="lastname" placeholder="apellido" class="form">
        <input type="submit" name="register" class="form">
    </form>

    <?php
    include ("registrar.php");
    ?>

</body>
</html>
