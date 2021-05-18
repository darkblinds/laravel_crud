<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $fillable = ['login', 'cpf', 'nome', 'email', 'endereco', 'senha'];
}
