<?php

namespace App\Http\Controllers;
use App\Models\assigncus;
use Illuminate\Http\Request;

class AssignCustEmpController extends Controller
{

    public function AssignWorker(Request $request)
    {
        $worker = new assigncus;
        $worker->employee_id = $request->empid;
        $worker->customer_id = $request->custid;
        $worker->save();
        return redirect('admin')->with('status', 'Blog Post Form Data Has Been inserted');
    }
}
