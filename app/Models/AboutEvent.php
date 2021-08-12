<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutEvent extends Model
{
    use HasFactory;
    protected $fillable = ['value', 'locale', 'event_id', 'type', 'about_id'];

    public static function saveEvent (Request $request, $model, $update = false)
    {
        if ($update) {
            $model->event()->delete();
        }
        if (isset($request->year_hy) && count($request->year_hy) && isset($request->event_hy) && count($request->event_hy)) {
            foreach ($request->year_hy as $key1 => $year_hy) {
                if ($year_hy != null) {
                    $item = $model->event()->create(
                        ['value' => $year_hy, 'locale' => 'hy', 'event_id' => 0, 'type' => 'key']
                    );
                }

                foreach ($request->event_hy as $key2 => $event_hy) {
                    if ($key1 == $key2 && $event_hy != null) {
                        $model->event()->create(
                            ['value' => $event_hy, 'locale' => 'hy', 'event_id' => $item->id, 'type' => 'value']
                        );
                    }
                }
            }
            if (isset($request->year_ru) && count($request->year_ru) && isset($request->event_ru) && count($request->event_ru)) {
                foreach ($request->year_ru as $key3 => $year_ru) {
                    if ($year_ru != null) {
                        $item = $model->event()->create(
                            ['value' => $year_ru, 'locale' => 'ru', 'event_id' => 0, 'type' => 'key']
                        );
                    }

                    foreach ($request->event_ru as $key4 => $event_ru) {
                        if ($key3 == $key4 && $event_ru != null) {
                            $model->event()->create(
                                ['value' => $event_ru, 'locale' => 'ru', 'event_id' => $item->id, 'type' => 'value']
                            );
                        }
                    }
                }
            }
            if (isset($request->year_en) && count($request->year_en) && isset($request->event_en) && count($request->event_en)) {
                foreach ($request->year_en as $key5 => $year_en) {
                    if ($year_en != null) {
                        $item = $model->event()->create(
                            ['value' => $year_en, 'locale' => 'en', 'event_id' => 0, 'type' => 'key']
                        );
                    }
                    foreach ($request->event_en as $key6 => $event_en) {
                        if ($key5 == $key6 && $event_en != null) {
                            $model->event()->create(
                                ['value' => $event_en, 'locale' => 'en', 'event_id' => $item->id, 'type' => 'value']
                            );
                        }
                    }
                }
            }
        }

    }
}
