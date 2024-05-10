<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = '_usuarios';
    protected $primaryKey = 'id'; 
    public $timestamps = false;
}
