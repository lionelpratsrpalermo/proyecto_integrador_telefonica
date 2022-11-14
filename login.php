<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plantilla</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="https://www.revistapalermo.com.ar/favicon.ico" />
</head>

<body class="d-flex align-items-center min-vh-100">
    <div class="container">
        <div class="row">
            <div class="col-1 col-md-3"></div>
            <div class="col-10 col-md-6">
                <form action="login_process.php" method="POST">
                    <div class="form-group mb-4">
                        <label for="user" class="mb-2">Usuario</label>
                        <input type="text" name="user" id="user" placeholder="Ingrese su usuario" class="form-control">
                    </div>
                    <div class="form-group mb-4">
                        <label for="password" class="mb-2">Contraseña</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success container-fluid">Ingresar</button>
                </form>
            </div>
            <div class="col-1 col-md-3"></div>
        </div>
    </div>

</body>

</html>