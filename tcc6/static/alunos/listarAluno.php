<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="divstyle">

            <div class="d-flex justify-content-center">
                <h1>Alunos Cadastrados</h1>
            </div>
            <?php
            include '../conexao.php';
            $sql = "SELECT * FROM arthur_assis.alunos ORDER BY nome";
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
                        <th scope="col">Sobrenome</th>
                        <th scope="col">Sala</th>    
                        <th scope="col">Telefone</th>
                        <th scope="col">Email</th>  
                        <th scope="col">Livro alugado</th> 
                        <th scope="col">Devolução</th> 
                        <th></th>
                        <th></th>
                    </tr>
                    <?php
                    while ($exibir = pg_fetch_assoc($result)){
                    ?>
                    <tr>
                    <?php
                    if($exibir["diadevolucao"]!='null'){
                        $hj = date('d'); $hj2 = date('m'); $hj3 = date('Y'); 
                        $dev = date('d', strtotime('+7 days')); $dev2 = date('m', strtotime('+7 days')); $dev3 = date('Y', strtotime('+7 days')); 
 
                        $txt=$hj3 . "-" . $hj2 . "-" . $hj; $txt2=$exibir["diadevolucao"];

                        $datahj = date_create($txt);
                        $datadevolucao = date_create($txt2);
                        $resultado = date_diff($datadevolucao, $datahj);
                        $resultado2 = date_interval_format($resultado, '%a');
                    }
                    ?>

                        <td><?php echo $exibir["id"] ?> </td>
                        <td><?php echo $exibir["nome"] ?> </td>
                        <td><?php echo $exibir["sobrenome"] ?> </td>
                        <td><?php echo $exibir["sala"] ?> </td>
                        <td><?php echo $exibir["telefone"] ?> </td>
                        <td><?php echo $exibir["email"] ?> </td>
                        <td><?php echo $exibir["livroalugado"]; ?></td>

                        <?php if($exibir["diadevolucao"]=='null'){ ?> <td>---</td> <?php }else{ ?>
                        <td><?php echo $resultado2 . ' dia(s)'; ?></td> <?php } ?>

                        <td><a style="margin-top: auto;"class="btn btn-outline-secondary" href="updateAluno.php?id=<?php echo $exibir["id"] ?>">Editar</a></td>
                        <td><a style="margin-top: auto;"class="btn btn-outline-secondary" href="deleteAluno.php?id=<?php echo $exibir["id"] ?>">Excluir</a></td>
                        <?php if ($exibir["livroalugado"]=='Nenhum'){ ?>
                            <td><a style="margin-top: auto;"class="btn btn-outline-secondary" href="listaLivrosAlugar.php?idaluno=<?php echo $exibir["id"] ?>">Alugar</a></td>
                        <?php }else{ 
                                $paraquebrar2= $exibir["id"] . "|" . $exibir["iddolivro"];
                        ?>
                            <td><a style="margin-top: auto;"class="btn btn-outline-secondary" href="devolverLivro.php?tenhoquequebrar2=<?php echo $paraquebrar2 ?>">Devolver</a></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </table>
                <div class="d-flex justify-content-end">
                    <a class="btn btn-outline-secondary" href="addAluno.php">Novo</a>
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