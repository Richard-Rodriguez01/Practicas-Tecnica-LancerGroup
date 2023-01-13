<form class="row g-3" action="<?= site_url('/guardarAuthor') ?>" method="post">
  <div class="col-md-6">
    <label for="inputNombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="inputNombre" name="inputNombre">
  </div>
  <div class="col-md-6">
    <label for="inputApellido" class="form-label">Apellido</label>
    <input type="tex" class="form-control" id="inputApellido" name="inputApellido">
  </div>
  <div class="col-6">
    <label for="inputPais" class="form-label">País</label>
    <input type="text" class="form-control" id="inputPais" name="inputPais">
  </div>
  <div class="col-6">
    <label for="inpuRegistro" class="form-label">Fecha Registro</label>
    <input type="date" class="form-control" id="inpuRegistro" name="inpuRegistro">
  </div>
  <div class="col-6">
    <label for="inputClibros" class="form-label">Cantidad de libros</label>
    <input type="number" class="form-control" id="inputClibros" name="inputClibros">
  </div>
 
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
</form>