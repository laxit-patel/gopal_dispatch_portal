<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class ConfigController extends Controller
{
    public function index()
    {
        $opening_hours = DB::table('opening_hours')->get();
        $encrypted = DB::table('config')->where('for','user')->first();
        $config = Crypt::decryptString($encrypted->timeout);

        return view('admin.config.view',compact('config','opening_hours'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'timeout' => 'required|date_format:H:i:s'
        ]);

        $timeout = Crypt::encryptString($request->timeout);

        DB::table('config')->where('for','user')->delete();
        DB::table('config')->insert(['timeout' => $timeout]);

        return redirect()->route('admin.config')->with('success','Timeout Setting Updated 👍');
    }

    public function opening(Request $request)
    {
        foreach ($request->days as $key => $day) {

            DB::table('opening_hours')->where('day',$day)->update([
                'start' => $request->start[$key],
                'end' => $request->end[$key]
            ]);
        }

        return redirect()->route('admin.config')->with('success','New Shedules is Live Now 👍');
    }
}
