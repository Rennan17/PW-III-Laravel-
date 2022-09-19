<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    protected $table = "tbcliente";

    protected $fillable = ['idCliente','nome','dtNasc','estadoCivil','endereco','numero','complemento','cep','cidade','estado','RG','cpf','email','fone','celular']; //campos da tabela
    public $timestamps = false;

}
