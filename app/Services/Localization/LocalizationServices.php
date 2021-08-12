<?php


namespace App\Services\Localization;


use Illuminate\Support\Facades\Facade;

class LocalizationServices extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "Localization";
    }
}
