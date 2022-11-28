<?php
    include '../conexao.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <?php
        if (isset($_GET["idl"])) {
            if (is_numeric($_GET["idl"])) {
                $SQL = "SELECT * FROM arthur_assis.livros WHERE idl = " . $_GET["idl"];
                $executa = pg_query($conn,$SQL);
                $resultado = pg_fetch_assoc($executa);
    ?>
    <div class='divstyle'>
        <div class="container" style="margin-top:5%;">
            <div class="tabela-fundo">
                <div class="d-flex justify-content-center">
                    <h1>Atualizar livro</h1>
                </div>
                <form name="frm_Aluno" method="POST" action="updateLivro2.php?idl=<?php echo $_GET["idl"];?>">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="txtNome" class="form-label">Nome</label>
                            <input class="form-control" type="text" name="txtNome" required="required"
                            value="<?php echo $resultado["nomel"]; ?>" />
                        </div>
                        <div class="col-md-3">
                            <label for="txtAutor" class="form-label">Autor</label>
                            <input class="form-control" type="text" name="txtAutor" required="required"
                            value="<?php echo $resultado["autor"]; ?>" />
                        </div>
                        <div class="col-md-1">
                            <label for="txtEditora" class="form-label">Editora</label>
                            <input class="form-control" type="text" name="txtEditora" required="required"
                            value="<?php echo $resultado["editora"]; ?>" />
                        </div>
                        <div class="col-md-4">
                            <label for="txtGenero" class="form-label">Gênero</label>
                            <input class="form-control" type="text" name="txtGenero" required="required"
                            value="<?php echo $resultado["genero"]; ?>" />
                        </div>
                        <div class="col-md-5">
                            <label for="numAno" class="form-label">Ano</label>
                            <input class="form-control" type="text" name="numAno" required="required"
                            value="<?php echo $resultado["ano"]; ?>" />
                        </div>
                    </div><!--row--><br>
                    <input class="btn btn-outline-secondary" type="submit" value="Atualizar">
                    <input class="btn btn-outline-secondary" style="margin-left: 5px;" type="reset" value="Limpar">
                </form>
                <div class="d-flex justify-content-end">
                <a href="listarLivro.php" class="btn btn-outline-secondary">Cancelar</a>
                <a href="../../templates/index.html" class="btn btn-outline-secondary">Menu geral</a>
                </div>
            </div><!--tabela-fundo-->
        </div><!--container-->
    </div><!--divstyle-->
    <?php
            }
        }
    ?>
</body>
</html>