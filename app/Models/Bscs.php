<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bscs extends Model
{
    use HasFactory;
    protected $table='bscs';
    protected $primaryKey="id";
 
    protected $fillable = [
        "name",
        "fathername",
        "sname",
        "phone",
        "password",
    ];

}
