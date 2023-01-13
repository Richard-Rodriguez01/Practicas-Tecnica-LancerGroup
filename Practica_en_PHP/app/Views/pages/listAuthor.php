<h1>Listado de Autores</h1>
<br>

<table id="myTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>País</th>
                <th>Acciones</th>
                
            </tr>
        </thead>
        <tbody>

        <?php foreach($autores as $author): ?>
            <tr>
                <td><?= $author['id'];?></td>
                <td><?= $author['Nombre'];?></td>
                <td><?= $author['Apellido'];?></td>
                <td><?= $author['Pais'];?></td>
                
                <td>
                <a href="" class="btn btn-info" type="button">Ver detalles</a>
                <a href="" class="btn btn-primary" type="button">Editar</a>    
                <a href="<?=base_url('eliminar/'.$author['id']);?>" class="btn btn-danger" type="button">Eliminar</a>
            </td>
                
            </tr>
        <?php endforeach; ?>
            </tbody>
        <tfoot>
            <tr>
            <th></th>
            <th>Nombre</th>
                <th>Apellido</th>
                <th>País</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>
  