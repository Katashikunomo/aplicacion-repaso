<?php include("../../templates/header.php");?>
<br>

<div class="card">
    <!-- <h3 class="text-center">Empleados</h3> -->
    <div class="card-header ">
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar Registro</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Foto</th>
                        <th scope="col">CV</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">Fecha de Ingreso</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">Andres Malfavaun</td>
                        <td>Imagen.jpg</td>
                        <td>CV.pdf</td>
                        <td>Programador sr</td>
                        <td>10/03/2023</td>
                        <td><a name="" id="" class="btn btn-primary" href="#" role="button">Carta</a>      
                         <a name="" id="" class="btn btn-warning" href="#" role="button">Editar</a>     
                         <a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
    <div class="card-footer text-muted">
        Footer
    </div>
</div>

<?php include("../../templates/footer.php");?>