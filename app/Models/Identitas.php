<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identitas extends Model
{
    use HasFactory;

    protected $fillbale = [
        'name' ,
        'alamat' ,
        'email' ,
        'nomor_hp' ,
    ];
}
