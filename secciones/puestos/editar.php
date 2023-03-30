<?php
    //validar que la ID llegue a la url
    include("../../bd.php");
    if (isset( $_GET['txtID'] )) {
        # code...
        //se crea una variable que se valida
    
        $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";
        $sentencia = $conexion->prepare("SELECT * FROM tbl_puestos WHERE id =:id");
        $sentencia->bindParam(":id",$txtID);
        $sentencia->execute();

        $registro =$sentencia->fetch(PDO::FETCH_LAZY);
        $nombredelpuesto=$registro["nombredelpuesto"];
    }
    if ($_POST) {
        # code..
        // print_r($_POST);
    
        //recolectamos los adtos del metodo post
        $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";
        $nombredelpuesto=(isset($_POST["nombredelpuesto"])?$_POST["nombredelpuesto"]:"");
        //preparar la insersion de los datos
        $sentencia = $conexion->prepare("UPDATE tbl_puestos SET nombredelpuesto = :nombredelpuesto WHERE id = :id");
        //Asignando los valores que vienen del formulario
        $sentencia->bindParam(":nombredelpuesto",$nombredelpuesto);
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
<title>
    Editar Puesto
</title>
<?php include("../../templates/header.php");?>

<!-- <h1>editar puestos</h1> -->
<br>
<div class="card">
        <div class="card-header">
            Puestos
        </div>
        <div class="card-body">

            <form action="" method="post" enctype="multipart/form-data">

                <div class="mb-3">
                  <label for="txtID" class="form-label">ID:</label>
                  <input type="text" value=" <?php echo $txtID; ?>" class="form-control" readonly name="txtID" id="txtID" aria-describedby="helpId" placeholder=" ID ">
                </div>

                <div class="mb-3">
                  <label for="nombredelpuesto" class="form-label" >Nombre del Puesto</label>
                  <input type="text"
                    value="<?php echo $nombredelpuesto; ?>"
                    class="form-control" name="nombredelpuesto" id="nombredelpuesto" aria-describedby="helpId" placeholder="Nombre del Puesto" style=text-transform:uppercase;>
                </div>

                <button type="submit" class="btn btn-success">Actualizar</button>
                <a name="" id="" class="btn btn-primary" href="index.php" role="button">Regresar</a>
            </form>

        </div>
        <div class="card-footer text-muted">
        </div>
    </div>

<?php include("../../templates/footer.php");?>