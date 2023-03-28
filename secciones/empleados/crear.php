<?php include("../../templates/header.php");?>
<h1>crear lista de empleados</h1>
<div class="card">
    <div class="card-header">
        Datos del Empleado
    </div>
    <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">

    <div class="mb-3">
      <label for="primernombre" class="form-label">Primer Nombre</label>
      <input type="text"
        class="form-control" name="primernombre" id="primernombre" aria-describedby="helpId" placeholder="Primer Nombre" Required>
    </div>

    <div class="mb-3">
      <label for="segundonombre" class="form-label">Segundo Nombre</label>
      <input type="text"
        class="form-control" name="segundonombre" id="segundonombre" aria-describedby="helpId" placeholder="Segundo Nombre" >
    </div>

    <div class="mb-3">
      <label for="primerapellido" class="form-label">Primer Apellido</label>
      <input type="text"
        class="form-control" name="primerapellido" id="primerapellido" aria-describedby="helpId" placeholder="Primer Apellido" Required>
    </div>

    <div class="mb-3">
      <label for="segundoapellido" class="form-label">Segundo Apellido</label>
      <input type="text"
        class="form-control" name="segundoapellido" id="segundoapellido" aria-describedby="helpId" placeholder="Segundo Apellido" Required>
    </div>

    <div class="mb-3">
        <label for="foto" class="form-label">Agregar Imagen</label>
        <input type="file" class="form-control" name="foto" id="foto" placeholder="Selecciona la imagen" aria-describedby="fileHelpId">
    </div>

    <div class="mb-3">
      <label for="cv" class="form-label">AgregarCV en PDF</label>
      <input type="file" class="form-control" name="cv" id="cv" placeholder="Ajunta pdf" aria-describedby="fileHelpId" Required>
    </div>

    <div class="mb-3">
        <label for="idpuesto" class="form-label">Puesto</label>
        <select class="form-select form-select-sm" name="idpuesto" id="idpuesto">
            <option selected>Select one</option>
            <option value="">New Delhi</option>
            <option value="">Istanbul</option>
            <option value="">Jakarta</option>
        </select>
    </div>

    <div class="mb-3">
      <label for="Fecha de Ingreso" class="form-label">Fecha de Ingreso</label>
      <input type="date" class="form-control" name="Fecha de Ingreso" id="Fecha de Ingreso" aria-describedby="emailHelpId" placeholder="Fecha de Ingreso a la empresa">
    </div>

    <button type="submit" class="btn btn-success">Agregar Registro</button>
    <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
    </form>

    </div>
</div>
<?php include("../../templates/footer.php");?>