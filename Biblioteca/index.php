<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tela de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid d-flex justify-content-center align-items-center ">
        <a class="navbar-brand"><i class="bi bi-book-half">Biblioteca</i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
<div class="container-fluid p-5">
    <div class="row">
        <div class="col-lg-4 offset-lg-4">
            <div class="card">
                <div class="card-body text-center">
                    <h2>Login</h2>
                </div>
                <div class="card-body">
                    <form action="login.php" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="usuario" id="floatingInput"
                                   placeholder="Digite o seu login">
                            <label for="floatingInput">Usuário</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="senha" id="floatingPassword"
                                   placeholder="Digite a sua senha">
                            <label for="floatingPassword">Senha</label>
                        </div>
                        <div class="mb-3">
                            <p><a href="#">Esqueceu a senha</a></p>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="container-fluid btn btn-primary">Entrar</button>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Cadastro</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>