<?php $quebrada = explode("|", $_GET["tenhoquequebrar"],3);
    include '../conexao.php';

    $dev = date('d', strtotime('+7 days')); $dev2 = date('m', strtotime('+7 days')); $dev3 = date('Y', strtotime('+7 days')); 
    $txt2=$dev3 . "-" . $dev2 . "-" . $dev;

    $SQL = "UPDATE arthur_assis.alunos SET livroalugado = '$quebrada[2]', iddolivro = '$quebrada[1]', diadevolucao = '$txt2' WHERE id = '$quebrada[0]'; UPDATE arthur_assis.livros SET
    alugado = 'Sim' WHERE idl = '$quebrada[1]'";
    if (pg_query($conn, $SQL) === TRUE) {
        echo "<script>alert('Registro inserido com sucesso.');</script>";
        echo "<script>window.location = 'listarAluno.php';</script>";
    } else {
        echo "Erro: " . $SQL . "<br>" .pg_last_error();
        echo "<script>window.location = 'listarAluno.php';</script>";
    }
    pg_close();
?>