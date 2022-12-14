<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ['id_tipo_usuario', 'id_imagens', 'id_cidade', 'primeiro_nome', 'sobrenome', 'apelido', 'data_nascimento', 'email', 'senha', 'whatsapp', 'status'];
}
