<?php
    include '../conexao.php';
    $nome = $_POST["txtNome"];
    $autor = $_POST["txtAutor"];
    $editora = $_POST["txtEditora"];
    $genero = $_POST["txtGenero"];
    $ano = $_POST["numAno"];
    $sql = "INSERT INTO arthur_assis.livros (nomel, autor, editora, genero, ano, alugado) VALUES ('$nome', '$autor', '$editora', '$genero', '$ano', 'Não')";
    if (pg_query($conn, $sql) === TRUE) {
        echo "<script>alert('Registro inserido com sucesso.');</script>";
        echo "<script>window.location = 'indexl.html';</script>";
    } else {
        echo "Erro: " . $sql . "<br>" .pg_last_error();
        echo "<script>window.location = 'listarLivro.php';</script>";
    }
    pg_close();
?>