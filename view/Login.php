<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <form action="../controller/LoginController.php"
            method="POST">
            <fieldset>
                <label for="usuario">Usuário</label>
                <input type="hidden" name="method" value="efetuarLogin" />
                <div class="mb-3">
                    <input type="text" name="usuario"
                       class="form-control" />
                </div>
                <label for="usuario">Senha</label>
                <div class="mb-3">
                    <input type="password" name="senha" class="form-control" />
                </div>
            </fieldset>
            <div class="d-grid gap-2 col-6 mx-auto">
                <input type="submit" value="Entrar" class="btn btn-primary" />
            </div>
        </form>
    </div>
</body>

</html>