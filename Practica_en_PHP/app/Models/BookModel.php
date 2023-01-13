<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table      = 'libros';
    protected $primaryKey = 'id';
    protected $allowedFields = ['Nombre', 'Fecha_publicacion', 'Edicion','Autor_id'];
}