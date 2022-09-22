<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaModel extends Model
{
    protected $table = "tbcategoria";

    protected $fillable = ['idCategoria','categoria']; //campos da tabela
    public $timestamps = false;

}
