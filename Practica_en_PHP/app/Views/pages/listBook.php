<h1>Listado de Libros</h1>
<br>

<table id="myTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Fecha de publicación</th>
                <th>Edición</th>
                <th>Autores</th>
                <th>Acciones</th>
                
            </tr>
        </thead>
        <tbody>

        <?php foreach($libros as $libro): ?>
            <tr>
                <td><?= $libro['id'];?></td>
                <td><?= $libro['Nombre'];?></td>
                <td><?= $libro['Fecha_publicacion'];?></td>
                <td><?= $libro['Edicion'];?></td>
                <td><?= $libro['Autor_id'];?></td>
                <td>
                <a href="" class="btn btn-info" type="button">Ver detalles</a>
                <a href="" class="btn btn-primary" type="button">Editar</a>    
                <a href="<?=base_url('eliminar/'.$libro['id']);?>" class="btn btn-danger" type="button">Eliminar</a>
            </td>
                
            </tr>
        <?php endforeach; ?>
            </tbody>
        <tfoot>
            <tr>
            <th>ID</th>
            <th>Nombre</th>
                <th>Fecha de publicación</th>
                <th>Edición</th>
                <th>Autores</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>
  