<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    protected $table = '_paquetes';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
