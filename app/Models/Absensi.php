<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
    protected $table = "_absensi";
    // protected $primaryKey = "nik";
    protected $guarded = [];
    protected $keyType = "string";
}
