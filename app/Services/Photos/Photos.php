<?php


namespace App\Services\Photos;


use Illuminate\Http\File;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Boolean;

class Photos
{
    public static function saveMultiSelectFiles (Request $request, $model, $relation, $requestName, $col, $video = true, $isType = false) {
        $data = array();
        if (isset($request->$requestName[0])) {
            $strArray = explode(',',$request->$requestName[0]);
            if ($video) {
                $typeName = $isType ? 'is_type' : 'type';
                foreach ($strArray as $item) {
                    $path = pathinfo(public_path($item));
                    if (in_array($path['extension'], ['mp4','mov','ogg'])) {
                        array_push($data, [$col => $item, $typeName => 2]);
                    } else {
                        array_push($data, [$col => $item, $typeName => 1]);
                    }
                }
            } else {
                foreach ($strArray as $item) {
                    array_push($data, [$col => $item]);
                }
            }
        }
        $model->$relation()->createMany($data);
    }
}

