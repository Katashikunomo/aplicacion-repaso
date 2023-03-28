<?php include("../../templates/header.php");?>

<br>
<div class="card">
    <div class="card-header ">
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar Usuarios</a>
    </div>
    <div class="card-body">
    <div class="table-responsive">
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre del Usuario</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Correo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">1</td>
                <td>Andres</td>
                <td>********</td>
                <td>alex@gmail.com</td>
                <td>
                    <input name="btneditar" id="btneditar" class="btn btn-warning text-white" type="button" value="Editar">
                    <input name="btnborrar" id="btnborrar" class="btn btn-danger text-white" type="button" value="Eliminar">
                </td>
            </tr>
        </tbody>
    </table>
</div>

    </div>
</div>
<?php include("../../templates/footer.php");?>