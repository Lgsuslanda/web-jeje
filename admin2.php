<?php $titulo="Admin2";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include './assets/head.php' ?>
</head>
<body>
    <?php include './assets/menu.php'; ?>

    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="my-5">

                    </div>
                </div>

                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="my-5">
                        <form id="Formulario-Login" action="login.php" method="POST">
                            <h3>Iniciar Sesión</h3>
                            <div class="form-floating">
                                <input type="text" name="usuario" placeholder="Usuario" class="form-control" required>
                                <label for="usuario">Usuario</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" name="contrasena" placeholder="Contraseña" class="form-control" required>
                                <label for="contrasena">Contraseña</label>
                            </div>
                            <button type="submit" class="btn btn-primary text-uppercase"><i class="fa-solid fa-sign-in"></i> Iniciar Sesión</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>