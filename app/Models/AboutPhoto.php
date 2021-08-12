<?php

namespace App\Models;

use App\Development\Development;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutPhoto extends Model
{
    use HasFactory;
    protected $fillable = ['about_id', 'photo', 'type'];

    public static function deleteAboutPhoto (Request $request)
    {
        if (isset($request->deleteAboutPhoto) && count($request->deleteAboutPhoto)) {
            Development::deleteFiles($request->deleteAboutPhoto, 'about_photos', 'photo');
            self::whereIn('id', $request->deleteAboutPhoto)->delete();
        }
    }
}
