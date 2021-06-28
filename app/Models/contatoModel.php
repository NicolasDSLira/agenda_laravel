<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contatoModel extends Model
{
    use HasFactory;

    protected $table = 'contatos';

    public $timestamps = false;

    protected $fillable = ['nome_contato','email_contato','numero_contato'];

}
