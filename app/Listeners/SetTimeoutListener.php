<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Crypt;

class SetTimeoutListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        if(!$event->user->is_admin){
            $encrypted = DB::table('config')->where('for','user')->first();
            $decrypted = Crypt::decryptString($encrypted->timeout);

            $chunks = explode(':',$decrypted);
            
            $expiry = Carbon::now()->addHour($chunks[0])->addMinutes($chunks[1])->addSeconds($chunks[2]);

            $id = $event->user->id; //logged user id

            DB::table('timeout')->where('user',$id)->delete();
    
            DB::table('timeout')->insert([
                'id' => Str::uuid()->toString(),
                'user' => $id,
                'expires_at' => $expiry
            ]); //store in timeout table
        }
    }
}
