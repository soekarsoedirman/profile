<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postingan extends Model
{
    use HasFactory;
    protected $table = 'postingan';
    protected $fillable = [
        'judul',
        'content',
        'foto',
        'kategori',
    ];
}
