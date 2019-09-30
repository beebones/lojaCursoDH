<?php
    $nomeSistema = "Cursos da Bee";
    $usuario = ["nome"=>"BeeBones"];
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
    <header class="navbar">
        <h1 id="logo"><?php echo $nomeSistema; ?></h1>
        <nav>
            <ul class="nav">
            <?php if(isset($usuario) && $usuario != "") {?>            
                <li class="nav-item"><a href="#" class="nav-link">Cursos</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Olá <?php echo $usuario["nome"]; ?></a></li>                
            <?php } else { ?>
                <li class="nav-item"><a href="#" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Cadastrar</a></li>
            <?php } ?>
            </ul>
        </nav>
    </header>
    <main>
        <section class="container mt-4">
            <div class="row justify-content-around">
                <div class="col-lg-3 card text-center">               
                    <h2>Curso HTML</h2>
                    <img src="img/html.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">R$15,00</h5>
                        <a href="#" class="btn btn-primary">Buy</a>
                    </div>
                </div>
                <div class="col-lg-3 card text-center">               
                    <h2>Curso CSS</h2>
                    <img src="img/css.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">R$35,00</h5>
                        <a href="#" class="btn btn-primary">Buy</a>
                    </div>
                </div>
                <div class="col-lg-3 card text-center">               
                    <h2>Curso JavaScript</h2>
                    <img src="img/js.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">R$85,00</h5>
                        <a href="#" class="btn btn-primary">Buy</a>
                    </div>
                </div>



                </div>
            </div>
        </section>
    </main>

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