<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    public function index (Request $request)
    {
        if (!in_array($request->type, [1,2])) {
            $typeError = [
              'type' => ['type required and value only 1 or 2']
            ];
            return response()->json(['error_message' => $typeError, 'error_code' => 400], 400);
        }
        if ($request->type == 1) {
            $validator = Validator::make($request->all(), [
                'upload' => 'array|required',
                'upload.*' => 'mimes:jpeg,jpg,png,gif,bmp,mp4,mov,ogg|max:12000',
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'upload' => 'array|required',
                'upload.*' => 'mimes:jpeg,jpg,png,gif,bmp|max:12000',
            ]);
        }

        if ($validator->fails()) {
            return response()->json(['error_message' => $validator->errors(), 'error_code' => 400], 400);
        }

        if (isset($request->upload) && count($request->upload)) {
            $pathList = array();
            foreach ($request->file('upload') as $item) {
                array_push($pathList, $item->store('multiSelectFiles'));
            }
            return response()->json(['status' => 200, 'response' => $pathList], 200);
        }
        return response()->json(['error_message' => 'There are no files in the request', 'error_code' => '400'], 400);
    }
}
