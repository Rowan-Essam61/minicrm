<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{

    public function AddWorker(Request $request)
    {
        $worker = new Employee;
        $worker->username = $request->username;
        $worker->email = $request->email;
        $worker->save();
        $url= $request->session()->get('type');
        return redirect($url)->with('status', 'added successfully');
    }
    public function CheckWorker(Request $request)
    {
        $worker = new Employee;
        $worker->username = $request->username;
        $worker->email = $request->email;

        $user = DB::table('employees')->where('email',$worker->email)->first();
        echo $user->email;
        if( is_null($user)){
            return redirect('home')->with('status', 'invalid Username and Password');
        }
        else{
            $request->session()->put('type','employee');
            $url= $request->session()->get('type');
            return redirect($url)->with('status', 'Logged in successfully');

        }

    }
    // public function AddNAssignWorker(Request $request)
    // {
    //     $worker = new Employee;
    //     $worker->username = $request->username;
    //     $worker->email = $request->email;
    //     $worker->save();
    //     AssignCustEmpController.AssignWorker($requ)
    //     return redirect('admin')->with('status', 'Blog Post Form Data Has Been inserted');
    // }

}
