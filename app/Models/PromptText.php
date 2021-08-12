<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromptText extends Model
{
    use HasFactory;
    protected $fillable = ['text_hy', 'text_ru', 'text_en'];
}
