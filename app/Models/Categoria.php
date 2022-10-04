<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    // campos publicáveis
    protected $fillable = ['nomedacategoria'];

    // nome da chave primaria
    protected $primaryKey = 'pkcategoria';

    // Nome da tabela
    protected $table = 'categorias';

    // Informa que esta trabalhando com incermento
    public $incrementing = true;

    // não utiliza timestamps nos controles (created & updated)
    public $timestamps = false;
}
