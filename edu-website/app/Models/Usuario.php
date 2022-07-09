<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'email', 'cpf', 'endereco', 'empresa', 'telefone', 'tipo', 'curso_id', 'senha', 'conf_senha'];

    public function cursos() {
        return $this->belongsTo(Curso::class);
    }
}
