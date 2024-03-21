<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Cadastro de Leitores</title>
</head>
<body>
<div class="container-fluid p-5">
    <div class="row">
        <div class="col-lg-4 offset-lg-4">
            <div class="card">
                <div class="card-body text-center">
                    <h2>Cadastro de Leitores</h2>
                </div>
                <div class="card-body">
                    <form class="row g-3">
                        <div class="col-md-12">
                            <label for="inputNome4" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="inputNome4">
                        </div>
                        <div class="col-12">
                            <label for="inputEndereco" class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="inputEndereco" placeholder="1234 Main St">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCidade" class="form-label">Cidade</label>
                            <input type="text" class="form-control" id="inputCidade">
                        </div>
                        <div class="col-md-4">
                            <label for="inputEstado" class="form-label">Estado</label>
                            <select id="inputEstado" class="form-select">
                                <option selected>Choose...</option>
                                <option>GO</option>
                                <option>DF</option>
                                <option>MG</option>
                                <option>RO</option>
                                <option>SC</option>
                                <option>RJ</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="inputTel" class="form-label">Telefone</label>
                            <input type="tel" class="form-control" id="inputTel">
                        </div>
                        <div class="col-12">
                            <label for="inputEmail" class="form-label">Endereço</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="exemplo@gmail.com">
                        </div>
                        <div class="col-md-6">
                            <label for="inputRG" class="form-label">RG</label>
                            <input type="number" class="form-control" id="inputRG">
                        </div>
                        <div class="col-md-6">
                            <label for="inputDataNasc" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" id="inputDataNasc">
                        </div>
                        <div class="col-md-10">
                            <label for="inputCatLei" class="form-label">Categoria do Leitor</label>
                            <select id="inputCatLei" class="form-select">
                                <option selected>Choose...</option>
                                <option>Estudante</option>
                                <option>Professor</option>
                                <option>Servidor</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Casdastro</button>
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
