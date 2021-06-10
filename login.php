<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>Iniciar sesión</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/login/login.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3b93b417c8.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <form method="POST" action="log/submit-login.php" class="needs-validation" novalidate>
            <!-- E-Mail -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Correo electrónico</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                <div class="valid-feedback">
                    Bien!
                </div>
                <div class="invalid-feedback">
                    Se necesita un E-Mail válido.
                </div>
            </div>
            <!-- Usuario -->
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Usuario</label>
                <input type="text" name="user" class="form-control" id="exampleFormControlInput2" placeholder="exampleUser01">
                <div class="valid-feedback">
                    Bien!
                </div>
                <div class="invalid-feedback">
                    Se necesita un E-Mail válido.
                </div>
            </div>
            <!-- Contraseña -->
            <div class="mb-3">
                <label for="inputPassword">Contraseña</label>
                <input type="password" name="pass" class="form-control" id="inputPassword">
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" name="submit" value="Iniciar sesión">
            </div>
        </form>
    </div>
</body>
    <!-- Script -->
    <!-- JQuery -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
            })
        })()
    </script>
</html>