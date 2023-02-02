<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkerController extends Controller
{
    //

    public function CheckWorker(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'type'=> 'required'
        ]);

        $credentials = $request->only('username','email', 'type');
        if (Auth::attempt($credentials)) {
            if($request->type=="admin"){
            return redirect('admin')->withSuccess('Signed in');
            }
            else{
                return redirect('employee')->withSuccess('Signed in');
            }

        }

        return redirect("home")->withSuccess('Login details are not valid');

    }
}
