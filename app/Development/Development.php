<?php


namespace App\Development;
use App\Models\AboutPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class Development
{
    public static function photo(Request $request, string $input, string $output)
    {
        if ($request->hasFile($input)) {
            $path = $request->file($input)->store('photos');
            $request->request->add([$output => $path]);
        }
    }

    public static function photoType(Request $request)
    {
        $imageExtension = ['jpeg','jpg','png','gif'];
        if ($request->hasFile('upload')) {
            $extension = $request->file('upload')->extension();
            if (in_array($extension, $imageExtension)) {
                $request->request->add(['type' => 1]);
            } else {
                $request->request->add(['type' => 2]);
            }
        }
    }

    public static function photos (Request $request, $table, $id, $upload, $video = true)
    {
        $imageExtension = ['jpeg','jpg','png','gif', 'pdf'];
        $data = array();
        if ($request->hasFile($upload)) {
            foreach ($request->file($upload) as $item) {
                $extension = $item->extension();
                if (in_array($extension, $imageExtension)) {
                    $type = 1;
                } else {
                    $type = 2;
                }
                if ($video) {
                    array_push($data, ['photo' => $item->store('photos'), 'type' => $type, 'about_id' => $id]);
                } else {
                    array_push($data, ['photo' => $item->store('photos'), 'about_id' => $id]);
                }

            }
            DB::table($table)->insert($data);
        }
    }

    public static function deleteFiles ($ids, $tableName, $columnName)
    {
        $files = DB::table($tableName)->whereIn('id', $ids)->get()->pluck($columnName);
        if (count($files)) {
            foreach ($files as $file) {
                File::delete(public_path('images/'.$file));
            }
        }
    }

    public static function deleteFile ($path)
    {
        if (isset($path)) {
            File::delete(public_path('images/'.$path));
        }
    }

    public static function customValidate(Request $request) {
        if (strlen($request->name_hy) > 500 || strlen($request->name_ru) > 500 || strlen($request->name_en) > 500) {
            return true;
        } else {
           return false;
        }
    }
}
