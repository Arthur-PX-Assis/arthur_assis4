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
                        <h1>Inserir Livro</h1>
                </div>
                <form action="insertLivro.php" method="post" style="margin-top:2rem">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="txtNome" class="form-label">Nome</label>
                            <input class="form-control" type="text" name="txtNome" placeholder="Nome" required>    
                        </div>
        
                        <div class="col-md-3">
                            <label for="txtAutor" class="form-label">Autor</label>
                            <input class="form-control" type="text" name="txtAutor" placeholder="Autor" required>    
                        </div>
        
                        <div class="col-md-3">
                            <label for="txtEditora" class="form-label">Editora</label>
                            <input class="form-control" type="text" name="txtEditora" placeholder="Editora" required>    
                        </div>
        
                        <div class="col-md-3">
                            <label for="txtGenero" class="form-label">Gênero</label>
                            <input class="form-control" type="text" name="txtGenero" placeholder="Gênero" maxlength="20" required>    
                        </div>
        
                        <div class="col-md-3">
                            <label for="numAno" class="form-label">Ano</label>
                            <input class="form-control" type="number" name="numAno" placeholder="Ano" maxlength="4" required>    
                        </div>
                    </div><!--row-->
                    <br>
                    <input class="btn btn-outline-secondary" type="submit" name="btnSalvar" value="Salvar">
                    <input class="btn btn-outline-secondary" style="margin-left: 5px;" type="reset" name="btnCancelar" value="Cancelar">
                </form>
                <div class="d-flex justify-content-end">
                    <a href="listarLivro.php" class="btn btn-outline-secondary">Voltar</a>
                    <a href="../../templates/index.html" class="btn btn-outline-secondary">Menu geral</a>
                </div>
            </div><!--tabela-fundo-->
        </div><!--container-->
    </div><!--divstyle-->
</body>

</html>