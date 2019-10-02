<?php
    $nomeSistema = "Cursos da Bee";
    $usuario = ["nome"=>"BeeBones"];
    $produtos = [
        ["nome"=>"Curso Javascript", "preco"=>"1.200.00", "duracao"=>"5 meses", "img"=>"img/js.png"],
        ["nome"=>"Curso HTML", "preco"=>"400.00", "duracao"=>"3 meses", "img"=>"img/html.png"],
    ];
    $categorias = ["Cursos", "Palestras", "Artigos"];
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
    <header>
        <div class="navbar">
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
        </div>
        <!-- categorias -->
        <nav class="navbar bg-dark">
            <ul class="nav">
                <?php if(isset($categorias) && $categorias != []){ ?>
                    <?php foreach($categorias as $categoria){ ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"><?php echo $categoria; ?></a>
                        </li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </nav>
    </header>
        
    <main>
        <section class="container mt-4">
            <div class="row justify-content-around">
            <?php if(isset($produtos) && $produtos != []){ ?>
                <?php foreach($produtos as $produto){ ?>
                    <div class="col-lg-3 card text-center">               
                        <h2><?php echo $produto['nome']; ?></h2>
                        <img src="<?php echo $produto['img']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $produto['preco']; ?></h5>
                            <a href="#" class="btn btn-primary">Buy</a>
                        </div>
                    </div>
                <!-- Fechando PHP do foreach -->
                <?php } ?>               
            <!-- fechando o if -->
            <?php } else { ?>
                <h1>Não tem produtos cadastrados nessa sessão :(</h1>
            <?php } ?>
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