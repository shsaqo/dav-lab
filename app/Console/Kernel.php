<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
//        $schedule->call(function () {
//           Log::alert('delete file');
//        });

//        $schedule->call(function () {
////            $pathName = public_path('images/multiSelectFiles');
//            $filesInFolder = Storage::files('images/multiSelectFiles');
//            $files = array();
//            foreach($filesInFolder as $path) {
//                array_push($files, 'multiSelectFiles/'.basename($path));
//            }
//            foreach($files as $file) {
//                if (!DB::table('about_photos')->where('photo', $file)->first()) {
//                    Storage::delete($file);
//                }
//                if (!DB::table('about_licenses')->where('photo', $file)->first()) {
//                    Storage::delete($file);
//                }
//                if (!DB::table('news_files')->where('news_other_photo', $file)->first()) {
//                    Storage::delete($file);
//                }
//            }
//        });
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
