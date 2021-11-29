<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personas extends Model
{
    protected $table = 'personas';
    protected $primaryKey = 'id';
    use HasFactory;
}
