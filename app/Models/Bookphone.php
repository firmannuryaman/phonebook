<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookphone extends Model
{
    use HasFactory;

    protected $table = 'bookphone';

    protected $fillable = [
        'nama',
        'no_hp',
        'alamat',
    ];
}
