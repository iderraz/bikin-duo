<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterBottom extends Model
{
    use HasFactory;

    protected $table = 'footer_bottoms';

    protected $fillable = [
        'titre',
        'icone'
    ];
}
