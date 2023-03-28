<?php include("../../templates/header.php");?>
<h1>crear usuarios</h1>

<br>
    <div class="card">
        <div class="card-header">
            Datos del Usuarios
        </div>
        <div class="card-body">

            <form action="" method="post" enctype="multipart/form-data">

                <div class="mb-3">
                  <label for="usuario" class="form-label">Nombre del Usuario</label>
                  <input type="text"
                    class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="Nombre del Usuario" Required>
                </div>

                <div class="mb-3">
                  <label for="correo" class="form-label">Correo</label>
                  <input type="email"
                    class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="escribe tu correo" Required>
                  <small id="helpId" class="form-text text-muted">Si ta estas registrado inicia sesion <a href="#">aqui</a></small>
                </div>

                <div class="mb-3">
                  <label for="password" class="form-label">password:</label>
                  <input type="password"
                    class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Escribe tu contraseña" Required>
                </div>

                <button type="submit" class="btn btn-success">Agregar</button>
                <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
            </form>

        </div>
        <div class="card-footer text-muted">
        </div>
    </div>

<?php include("../../templates/footer.php");?>