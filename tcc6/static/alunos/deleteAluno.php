<?php
    include '../conexao.php';
    if(is_numeric($_GET["id"])){
        $SQL = "DELETE FROM arthur_assis.alunos WHERE id = ".$_GET["id"];
        if (pg_query($conn, $SQL) === TRUE) {
            echo "<script>alert('Registro excluído com sucesso!');</script>";
            echo "<script>window.location = 'indexl.html';</script>";
        }
        else{
            echo "Erro: " . $sql . "<br>" .pg_last_error();
            echo "<script>window.location = 'listarAluno.php';</script>";
        }
    }
?>
