<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsFresh extends Model
{
    use HasFactory;
    protected $fillable = ['title_hy', 'title_ru', 'title_en', 'text_hy', 'text_ru', 'text_en', 'url', 'type', 'photo'];

    public static function updateUrl(Request $request, $id) {
        $request->merge(['url' => Str::slug($request->url, '-')]);
        $url = self::find($id)->url;
        if ($url != $request->url) {
            if (self::where('url', $request->url)->count() != 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    public static function formatUrl(Request $request) {
        $request->merge(['url' => Str::slug($request->url, '-')]);
        if(self::where('url', $request->url)->first()) {
            return true;
        }
    }

    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y.m.d');
    }

    public function newsPhotos ()
    {
        return $this->hasMany(NewsFile::class, 'news_fresh_id');
    }
}
