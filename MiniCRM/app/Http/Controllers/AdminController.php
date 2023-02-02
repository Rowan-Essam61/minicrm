<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function CheckWorker(Request $request)
    {
        $worker = new Admin;
        $worker->username = $request->username;
        $worker->email = $request->email;
        $user = DB::table('admins')->where('email', $worker->email)->first();
        echo $user->email;
        if (is_null($user)) {
            return redirect('home')->with('status', 'invalid Username and Password');
        } else {
            $request->session()->put('type', 'admin');
            $url = $request->session()->get('type');
            return redirect($url)->with('status', 'Logged in successfully');
        }
    }
   
    public function Logout(Request $request)
    {
        $request->session()->forget('type');
        return redirect('home');
    }
}
