<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contato extends Model
{
    protected $table = 'contatos';

    protected $fillable = ['nome','email','telefone','datanasc','cidade','empresa'];

}
