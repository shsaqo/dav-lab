<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class About extends Model
{
    use HasFactory;
    protected $fillable = ['text_hy', 'text_ru', 'text_en'];

    public function photos ()
    {
        return $this->hasMany(AboutPhoto::class);
    }

    public function license ()
    {
        return $this->hasMany(AboutLicense::class);
    }

    public function event ()
    {
        return $this->hasMany(AboutEvent::class);
    }

}
