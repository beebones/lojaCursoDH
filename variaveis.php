<?php
    $nomeSistema = "Cursos da Bee";
    $usuario = ["nome"=>"BeeBones"];
    $nomeArquivo = "produto.json";
    $produtos = json_decode(file_get_contents($nomeArquivo), true);

    // $produtos = [
    //     ["nome"=>"Curso Javascript", "preco"=>"1.200.00", "duracao"=>"5 meses", "img"=>"img/js.png"],
    //     ["nome"=>"Curso HTML", "preco"=>"400.00", "duracao"=>"3 meses", "img"=>"img/html.png"],
    // ];
    $categorias = ["Cursos", "Palestras", "Artigos"];
?>