<?php
include("../../bd.php");
//PARA ELIMINAR LOS REGISTROS SE UTILIZA LA SIGUIENTE CONDICION QUE VALIDA SI SE RECIBE EL ID
if (isset( $_GET['txtID'] )) {
    # code...
    //se crea una variable que se valida

    $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";
    $sentencia = $conexion->prepare("DELETE FROM tbl_usuarios WHERE id =:id");
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();
    if ($sentencia) {
        
        echo"<div class='alert alert-danger' role='alert'>";
        echo "<strong>Registro</strong> Eliminado exitosamente!";
        echo "</div>";       
}

}

//Se utiliza una sentencia para poder hacer uso de la conexion a la base de datos
$sentencia=$conexion->prepare("SELECT * FROM `tbl_usuarios`");
$sentencia->execute();

//laa siguiente lista tiene todos los registros de los usuarios
$lista_tbl_usuarios=$sentencia->fetchAll(PDO::FETCH_ASSOC);


?>

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

            <?php foreach($lista_tbl_usuarios as $registro) { ?>

            <tr class="">
                <td scope="row"><?php echo $registro['id']; ?></td>
                <td><?php echo $registro['usuario']; ?></td>
                <td> <?php
                $ver = false; 
                // echo  "<a class='btn btn-primary href='index.php?$ver=true' role='button'>Consultar contraseña</a>";  
                if ($ver) {
                    # code...
                    echo $registro['password']; 
                }else{
                    echo("*****");
                }
                
                ?></td>
                <td><?php echo $registro['correo']; ?> </td>
                <td>
                     <!-- <input name="btneditar" id="btneditar" class="btn btn-warning text-white" type="button" value="Editar"> -->
                    <a class="btn btn-warning text-white" href="editar.php?txtID=<?php echo $registro['id']; ?>" role="button">Editar</a>
                    <a class="btn btn-danger" href="index.php?txtID=<?php echo $registro['id']; ?>" role="button">Eliminar</a>
                    <a name="" id="" class="btn btn-primary" href="index.php?<?php $ver = true; ?>" role="button">Consultar contraseña</a>
                </td>
            </tr>
            
            <?php } ?>

        </tbody>
    </table>
</div>

    </div>
</div>
<?php include("../../templates/footer.php");?>