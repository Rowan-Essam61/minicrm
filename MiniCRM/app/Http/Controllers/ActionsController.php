<?php

namespace App\Http\Controllers;

use App\Models\actions;
use Illuminate\Http\Request;

class ActionsController extends Controller
{
    public function AddEmpAction(Request $request)
    {
        $worker = new actions;
        $worker->employee_id = $request->empid;
        $worker->customer_id = $request->custid;
        $worker->action_type = $request->action;
        $worker->description = $request->description;
        $worker->save();
        $url = $request->session()->get('type');
        return redirect($url)->with('status', 'Blog Post Form Data Has Been inserted');
    }
    public function ViewActions(Request $request)
    {

        $actions = actions::join('employees', 'employees.id', '=', 'actions.employee_id')
            ->join('customers', 'customers.id', '=', 'actions.customer_id')
            ->get(['actions.id', 'employees.username as empname','customers.username as custname',  'actions.action_type', 'actions.description']);
        echo "<table border='1' style='margin:auto;margin-top:50px'>

            <tr>

            <th>Action number</th>

            <th>Employee Name</th>

            <th>Customer Name</th>

            <th>Action type</th>

            <th>Action Description</th>

            </tr>";


        foreach ($actions as $action) {
            echo "<tr>";

            echo "<td>" . $action->id . "</td>";

            echo "<td>" . $action->empname . "</td>";

            echo "<td>" . $action->custname . "</td>";

            echo "<td>" . $action->action_type . "</td>";

            echo "<td>" . $action->description . "</td>";

            echo "</tr>";

        }
    }
}
