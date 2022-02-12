<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    use HasFactory;
    protected $table="tb_alumnos";
    // protected $primarykey="id";
    protected $fillable =[
        "nombre","fn","gen","matricula","direccion","email","pass","foto","id_grupo"

    ];
}
