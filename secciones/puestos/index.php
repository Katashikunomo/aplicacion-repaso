<?php
include("../../bd.php");
//PARA ELIMINAR LOS REGISTROS SE UTILIZA LA SIGUIENTE CONDICION QUE VALIDA SI SE RECIBE EL ID
if (isset( $_GET['txtID'] )) {
    # code...
    //se crea una variable que se valida

    $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";
    $sentencia = $conexion->prepare("DELETE FROM tbl_puestos WHERE id =:id");
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();
    if ($sentencia) {
        
        echo"<div class='alert alert-danger' role='alert'>";
        echo "<strong>Registro</strong> Eliminado exitosamente!";
        echo "</div>";       
}

}


//Se utiliza una sentencia para poder hacer uso de la conexion a la base de datos
$sentencia=$conexion->prepare("SELECT * FROM `tbl_puestos`");
$sentencia->execute();

//laa siguiente lista tiene todos los registros de los puestos
$lista_tbl_puestos=$sentencia->fetchAll(PDO::FETCH_ASSOC);

// print_r($lista_tbl_puestos); 



?>
<?php include("../../templates/header.php");?>
<br>
<div class="card">
    <div class="card-header ">
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar Puesto</a>
    </div>
    <div class="card-body">
    <div class="table-responsive">
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre de Puesto</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
        <!--//se utiliza un ciclo que recorre el arreglo de la lista -->
        <?php foreach($lista_tbl_puestos as $registro){ ?>
                <tr class="">
                <td scope="row"><?php echo $registro['id']?></td>
                <td><?php echo $registro['nombredelpuesto']?></td>
                <td>
                    <!-- <input name="btneditar" id="btneditar" class="btn btn-warning text-white" type="button" value="Editar"> -->
                    <a class="btn btn-warning text-white" href="editar.php?txtID=<?php echo $registro['id']; ?>" role="button">Editar</a>

                    <a class="btn btn-danger" href="index.php?txtID=<?php echo $registro['id']; ?>" role="button">Eliminar</a>

                </td>
            </tr>
            <?php } ?>
           
        </tbody>
    </table>
</div>

    </div>
</div>


<?php include("../../templates/footer.php");?>