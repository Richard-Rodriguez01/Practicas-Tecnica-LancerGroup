
<form class="row g-3" action="<?= site_url('/guardarLibro') ?>" method="post">
  <div class="col-md-6">
    <label for="inputNombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="inputNombre" name="inputNombre">
  </div>
  <div class="col-md-6">
    <label for="inputFpublicacion" class="form-label">Fecha Publicación</label>
    <input type="date" class="form-control" id="inputFpublicacion" name="inputFpublicacion">
  </div>
  <div class="col-6">
    <label for="inputEdicion" class="form-label">Edición</label>
    <input type="text" class="form-control" id="inputEdicion" name="inputEdicion">
  </div>
  <div class="col-6">
    <label for="inputAutor" class="form-label">Autor</label>
    <input type="text" class="form-control" id="inputAutor" name="inputAutor">
  </div>
 
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
</form>