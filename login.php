<?php 
//usuario cadastrado no banco
$usuario = ["email" => "gelbundschwarz@gmail.com",
"senha"=>'$2y$10$qlz6DSpQ6TTJEYJEee6kxetW9D0oi/fivuPCX3JcNE6A.nwlWrB/.'];
if($_POST) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    //validando e-mail
    if($email == $usuario['email']) {
        //validando senha
        if(password_verify($senha, $usuario['senha'])) {
            session_start();
            $_SESSION['usuario'] = ["nome" => "Bee"];
            header('Location:index.php');
        } else {
            echo "Email ou senha inválidas";
        }

    } else {
        echo "Email ou senha inválidas";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <?php include_once('header.php'); ?>
    <main class="d-flex justify-content-center align-items-center p-5">
        <form action="login.php" method="post" class="card p-2">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" require>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control" require>
            </div>
            <div class="form-group text-center">
                <button class="btn btn-success" type="submit">Logar</button>
            </div>
        </form>
    </main>
</body>
</html>