<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <style>
        button,    .x {
            border-radius: 10px;
            font-size: 15px;
        }
    </style>
</head>

<body>
    <div class="divstyle">
        <div class="d-flex justify-content-center">
                <h1>Livros Cadastrados</h1>
        </div>
        <?php
            include '../conexao.php';
            $sql = "SELECT * FROM arthur_assis.livros ORDER BY nomel";
            $result = pg_query($conn, $sql);
            if ($result) {
        ?>
        <div class="container col-md-4 d-flex justify-content-center">
            <input name="consulta" id="txt_consulta" placeholder="Pesquisar" type="text" class="form-control">
        </div>
            <div class="container">
                <div class="tabela-fundo">
                    <table class="table">
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Editora</th>
                            <th scope="col">Gênero</th>
                            <th scope="col">Ano</th>
                            <th scope="col">Alugado?</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <?php
                        while ($exibir = pg_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td><?php echo $exibir["idl"] ?> </td>
                            <td><?php echo $exibir["nomel"] ?> </td>
                            <td><?php echo $exibir["autor"] ?> </td>
                            <td><?php echo $exibir["editora"] ?> </td>
                            <td><?php echo $exibir["genero"] ?> </td>
                            <td><?php echo $exibir["ano"] ?> </td>
                            <td><?php echo $exibir["alugado"] ?> </td>
                            <?php $nomeidl=$exibir['nomel'] . '|' . $exibir['idl'] ?>
                            <td><a class="btn btn-outline-secondary" href="updateLivro.php?idl=<?php echo $exibir["idl"] ?>">Editar</a></td>
                            <td><a class="btn btn-outline-secondary" href="deleteLivro.php?quebrar=<?php echo $nomeidl ?>">Excluir</a></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-outline-secondary" href="addLivro.php">Novo</a>
                        <a class="btn btn-outline-secondary" href="../../templates/index.html">Menu geral</a>
                    </div>
                </div><!--tabela-fundo-->
                </div><!--container-->
            <?php
            }
            else {
                echo "Nenhum registro encontrado.";
            }
            pg_close();
        ?>
    </div><!--divstyle-->
</body>

</html>