<?php
namespace App\Helpers; // Your helpers namespace
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class OpeningHours
{
    public static function check()
    {
        $now = Carbon::now();
        $today = $now->weekday();

        $day = DB::table('opening_hours')->where('day_number',$today)->first(); //retrieve config

        if($day->open == 0)
        {
            return false;
        }else
        {
            if($now->between($day->start, $day->end, true)) {
                return true;
              } else {
                return false;
              }
        }

    }

}
