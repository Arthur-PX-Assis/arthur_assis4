<?php
    include '../conexao.php';
    $nome = $_POST["txtNome2"];
    $autor = $_POST["txtAutor2"];
    $editora = $_POST["txtEditora2"];
    $genero = $_POST["txtGenero2"];
    $ano = $_POST["numAno2"];
    $SQL = "UPDATE arthur_assis.livros SET nomel = '$nome', autor='$autor', editora='$editora', genero='$genero', ano='$ano' WHERE idl = ".$_GET["idl"];
    if (pg_query($conn, $SQL) === TRUE) {
        echo "<script>alert('Registro atualizado com sucesso.');</script>";
        echo "<script>window.location = 'indexl.html';</script>";
    } else {
        echo "<script>alert('Erro ao editar o registro.');</script>";
        echo "<script>window.location = 'indexl.html';</script>";
    }
?>