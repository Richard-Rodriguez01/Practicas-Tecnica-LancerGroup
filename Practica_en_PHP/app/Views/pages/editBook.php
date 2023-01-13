<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>

<form class="row g-3" action="<?= site_url('/actualizarLibro') ?>" method="post">

    
    <input type="hidden" value="<?=$libro['id']?>" class="form-control" id="inputId" name="inputId">
    
<div class="col-md-6">
    <label for="inputNombre" class="form-label">Nombre</label>
    <input type="text" value="<?=$libro['Nombre']?>" class="form-control" id="inputNombre" name="inputNombre">
  </div>
  <div class="col-md-6">
    <label for="inputFpublicacion" class="form-label">Fecha Publicación</label>
    <input type="date" value="<?=$libro['Fecha_publicacion']?>" class="form-control" id="inputFpublicacion" name="inputFpublicacion">
  </div>
  <div class="col-6">
    <label for="inputEdicion" class="form-label">Edición</label>
    <input type="text" value="<?=$libro['Edicion']?>" class="form-control" id="inputEdicion" name="inputEdicion">
  </div>
  <div class="col-6">
    <label for="inputAutor" class="form-label">Autor</label>
    <input type="text" value="<?=$libro['Autor_id']?>" class="form-control" id="inputAutor" name="inputAutor">
  </div>
 
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Actualizar</button>
  </div>
</form>
<?= $this->endSection(); ?>