<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function AddWorker(Request $request)
    {
        $worker = new Customer;
        $worker->username = $request->username;
        $worker->email = $request->email;
        $worker->save();
        $url= $request->session()->get('type');
        return redirect($url)->with('status', 'Blog Post Form Data Has Been inserted');
    }
}
