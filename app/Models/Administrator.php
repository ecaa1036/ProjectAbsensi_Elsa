<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    use HasFactory;
    protected $table = "_administrators";
    protected $primaryKey = "id_karyawan";
    protected $guarded = [];
    protected $keyType = "string";
}
