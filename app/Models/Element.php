<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    use HasFactory;
    protected $fillable = ['name_hy', 'name_ru', 'name_en', 'price', 'analysis_category_id', 'prompt_text_hy', 'prompt_text_ru', 'prompt_text_en', 'order_by'];

    public function category ()
    {
        return $this->belongsTo(AnalysisCategory::class);
    }
}
