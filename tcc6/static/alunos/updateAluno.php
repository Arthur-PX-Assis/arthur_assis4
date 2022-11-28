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
        if (isset($_GET["id"])) {
            if (is_numeric($_GET["id"])) {
                $SQL = "SELECT * FROM arthur_assis.alunos WHERE id = " . $_GET["id"];
                $executa = pg_query($conn,$SQL);
                $resultado = pg_fetch_assoc($executa);
    ?>
    <div class='divstyle'>
        <div class="container" style="margin-top:5%;">
            <div class="tabela-fundo">
                <div class="d-flex justify-content-center">
                    <h1>Atualizar aluno</h1>
                </div>
                <form name="frm_Aluno" method="POST" action="updateAluno2.php?id=<?php echo $_GET["id"];?>">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="txtNome2" class="form-label">Nome</label>
                            <input class="form-control" type="text" name="txtNome2" required="required"
                            value="<?php echo $resultado["nome"]; ?>" />
                        </div>
                        <div class="col-md-3">
                            <label for="txtSobrenome2" class="form-label">Sobrenome</label>
                            <input class="form-control" type="text" name="txtSobrenome2" required="required"
                            value="<?php echo $resultado["sobrenome"]; ?>" />
                        </div>
                        <div class="col-md-1">
                            <label for="txtSala2" class="form-label">Sala</label>
                            <input class="form-control" type="text" name="txtSala2" required="required" maxlength="10"
                            value="<?php echo $resultado["sala"]; ?>" />
                        </div>
                        <div class="col-md-4">
                            <label for="txtTelefone2" class="form-label">Telefone</label>
                            <input class="form-control" type="text" name="txtTelefone2" required="required" maxlength="15"
                            value="<?php echo $resultado["telefone"]; ?>" />
                        </div>
                        <div class="col-md-5">
                            <label for="txtEmail2" class="form-label">Email</label>
                            <input class="form-control" type="text" name="txtEmail2" required="required"
                            value="<?php echo $resultado["email"]; ?>" />
                        </div>
                    </div><!--row--><br>
                    <input class="btn btn-outline-secondary" type="submit" value="Atualizar">
                    <input class="btn btn-outline-secondary" style="margin-left: 5px;" type="reset" value="Limpar">
                </form>
                <div class="d-flex justify-content-end">
                <a href="listarAluno.php" class="btn btn-outline-secondary">Cancelar</a>
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