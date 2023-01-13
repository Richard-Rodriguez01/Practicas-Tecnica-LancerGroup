<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthorModel extends Model
{
    protected $table      = 'autores';
    protected $primaryKey = 'id';
    protected $allowedFields = ['Nombre', 'Apellido', 'Pais','Fecha_registro','Cantidad_libros'];
}