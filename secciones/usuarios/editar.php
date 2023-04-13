<?php
 include("../../bd.php");

 if (isset( $_GET['txtID'] )) {
    # code...
    //se crea una variable que se valida

    $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";
    $sentencia = $conexion->prepare("SELECT * FROM tbl_usuarios WHERE id =:id");
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();

    $registro =$sentencia->fetch(PDO::FETCH_LAZY);
    $usuario=$registro["usuario"];
    $password=$registro["password"];
    $correo=$registro["correo"];
}
if ($_POST) {
    # code..
    // print_r($_POST);

    //recolectamos los adtos del metodo post
    $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";
    $usuario=(isset($_POST["usuario"])?$_POST["usuario"]:"");
    $password=(isset($_POST["password"])?$_POST["password"]:"");
    $correo=(isset($_POST["correo"])?$_POST["correo"]:"");
    //preparar la insersion de los datos
    $sentencia = $conexion->prepare("UPDATE tbl_usuarios SET usuario = :usuario,  password = :password, correo = :correo WHERE id = :id");
    //Asignando los valores que vienen del formulario
    $sentencia->bindParam(":usuario",$usuario);
    $sentencia->bindParam(":password",$password);
    $sentencia->bindParam(":correo",$correo);
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();
    if ($sentencia) {
            
            echo"<div class='alert alert-success' role='alert'>";
            echo "<strong>registro</strong> Se realizo el cambio exitosamente!";
            // echo "<aclass='btn btn-danger border' href='index.php' role='button'>Consultar cambios</a>";
            // echo "<br> <a class='btn btn-success' href='index.php' role='button'>Consultar cambios</a>";
            echo "</div>";       
    }
}
?>
<?php include("../../templates/header.php");?>
<h1>editar usuarios</h1>
<br>
    <div class="card">
        <div class="card-header">
            Datos del Usuarios
        </div>
        <div class="card-body">

            <form action="" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                  <label for="txtID" class="form-label">ID:</label>
                  <input type="text" value=" <?php echo $txtID; ?>" class="form-control" readonly name="txtID" id="txtID" aria-describedby="helpId" placeholder=" ID ">
                </div>

                <div class="mb-3">
                  <label for="usuario" class="form-label">Nombre del Usuario</label>
                  <input type="text" value=" <?php echo $usuario; ?>"
                    class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="Nombre del Usuario" Required>
                </div>

                <div class="mb-3">
                  <label for="correo" class="form-label">Correo</label>
                  <input type="email" value=" <?php echo $correo; ?>"
                    class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="escribe tu correo" Required>
                  <small id="helpId" class="form-text text-muted">Si ta estas registrado inicia sesion <a href="#">aqui</a></small>
                </div>

                <div class="mb-3">
                  <label for="password" class="form-label">password:</label>
                  <input type="password" value=" <?php echo $password; ?>"
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