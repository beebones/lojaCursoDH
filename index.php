<?php
    $nomeSistema = "Cursos da Bee";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header class="d-flex justify-content-between align-items-center p-3">
        <h1 id="logo"><?php echo $nomeSistema; ?></h1>
        <nav>
            <ul class="nav">
            <li class="nav-item">Cursos</li>
            <li class="nav-item">Login</li>
            <li class="nav-item">Cadastrar</li>
            </ul>
        </nav>
    </header>

    <!-- <?php
        $nome = "Bee"; 
        $idade = 29;
        $usuario = ["Bee", "Bones", 29];
        echo $nome;

        var_dump($usuario);

        echo"<h1>".$usuario[0]." ".$usuario[1]."</h1>"
    ?> -->
</body>
</html>