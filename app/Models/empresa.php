<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
    protected $table = 'empresas';

    protected $fillable = ['nome','cnpj','endereco','usuario'];

}
