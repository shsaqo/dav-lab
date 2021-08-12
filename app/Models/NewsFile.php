<?php

namespace App\Models;

use App\Development\Development;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsFile extends Model
{
    use HasFactory;
    protected $fillable = ['is_type', 'news_fresh_id', 'news_other_photo'];

    public static function newsOtherPhoto (Request $request, $id)
    {
        $data = array();
        if ($request->hasFile('otherPhoto')) {
            foreach ($request->file('otherPhoto') as $index => $otherPhoto) {
                $imageExtension = ['jpeg','jpg','png','gif'];
                $extension = $otherPhoto->extension();
                if (in_array($extension, $imageExtension)) {
                    $ext = 1;
                } else {
                    $ext = 2;
                }
                array_push($data, ['is_type' => $ext, 'news_other_photo' => $otherPhoto->store('photos'), 'news_fresh_id' => $id]);
            }
        }
        if (count($data)) {
            DB::table('news_files')->insert($data);
        }
    }

    public static function deleteNewsFiles (Request $request)
    {
        if(isset($request->deleteNewsFiles) && count($request->deleteNewsFiles)) {
            Development::deleteFiles($request->deleteNewsFiles, 'news_files', 'news_other_photo');
            NewsFile::whereIn('id', $request->deleteNewsFiles)->delete();
        }
    }
}

