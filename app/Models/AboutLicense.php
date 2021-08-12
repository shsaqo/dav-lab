<?php

namespace App\Models;

use App\Development\Development;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AboutLicense extends Model
{
    use HasFactory;
    protected $fillable = ['about_id', 'photo'];

    public static function deleteAboutLicense (Request $request)
    {
        if (isset($request->deleteAboutLicense) && count($request->deleteAboutLicense)) {
            Development::deleteFiles($request->deleteAboutLicense, 'about_licenses', 'photo');
            self::whereIn('id', $request->deleteAboutLicense)->delete();
        }
    }
}
