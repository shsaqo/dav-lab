<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AnalysisCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name_hy', 'name_ru', 'name_en', 'parent_id', 'child_count', 'element_count', 'order_by', 'type'];

    public function scopeOrdering($q)
    {
        return $q->orderBy(DB::raw('ISNULL(order_by), order_by'), 'ASC');
    }

    public function child ()
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }

    public function parent ()
    {
        return $this->hasMany(self::class, 'id', 'parent_id');
    }

    public function element ()
    {
        return $this->hasMany(Element::class)->orderBy(DB::raw('ISNULL(order_by), order_by'), 'ASC');
    }
}
