<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_hy', 'description_hy', 'button_hy',
        'title_ru', 'description_ru', 'button_ru',
        'title_en', 'description_en', 'button_en',
        'url', 'photo', 'type'
    ];
}
