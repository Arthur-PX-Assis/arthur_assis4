<?php
    include '../conexao.php';
    $SQL = "UPDATE arthur_assis.alunos SET nome='teste' WHERE id=14; UPDATE arthur_assis.livros SET nomel='teste' WHERE idl=6;";
    if (pg_query($conn, $SQL) === TRUE) {
    } else {
    }
?>