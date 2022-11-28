<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class='divstyle'>
            
        <div class="container" style="margin-top:5%;">
            <div class="tabela-fundo">
                <div class="d-flex justify-content-center">
                    <h1>Inserir aluno</h1>
                </div>
                <form action="insertAluno.php" method="post" style="margin-top:2rem">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="txtNome" class="form-label">Nome</label>
                            <input class="form-control" type="text" name="txtNome" placeholder="Nome" required>
                        </div>
                        <div class="col-md-3">
                            <label for="txtSobrenome" class="form-label">Sobrenome</label>
                            <input class="form-control" type="text" name="txtSobrenome" placeholder="Sobrenome" required>
                        </div>
                        <div class="col-md-1">
                            <label for="txtSala" class="form-label">Sala</label>
                            <input class="form-control" type="text" name="txtSala" placeholder="Sala" required>
                        </div>
                        <div class="col-md-4">
                            <label for="txtTelefone" class="form-label">Telefone</label>
                            <input class="form-control" type="text" name="txtTelefone" placeholder="Telefone" maxlength="10" required>
                        </div>
                        <div class="col-md-6">
                            <label for="txtEmail" class="form-label">Email</label>
                            <input class="form-control" type="text" name="txtEmail" placeholder="Email" required>
                        </div>
                    </div><!--row--><br>
                    <input class="btn btn-outline-secondary" type="submit" name="btnSalvar" value="Salvar">
                    <input class="btn btn-outline-secondary" style="margin-left: 5px;" type="reset" name="btnCancelar" value="Cancelar">
                </form>
                <div class="d-flex justify-content-end">
                    <a href="listarAluno.php" class="btn btn-outline-secondary">Voltar</a>
                    <a href="../../templates/index.html" class="btn btn-outline-secondary">Menu geral</a>
                </div>
            </div><!--tabela-fundo-->
        </div><!--container-->
    </div><!--divstyle-->


    
</body>

</html>