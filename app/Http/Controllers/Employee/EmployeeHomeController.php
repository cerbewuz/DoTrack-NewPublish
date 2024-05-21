<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Departments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Document;
use App\Models\Subclassification;
use App\Models\Prioritization;
use App\Models\Action;
use App\Models\Classification;

class EmployeeHomeController extends Controller
{
    // condition to check if the user is an employee
    public function index()
    {
        $employee_name = Auth::check() && Auth::user()->usertype == 0 ? Auth::user()->username : null;
        return view('employee.home', compact('employee_name'));
    }

    // for compose page
    public function compose()
    {
        $employee_name = Auth::check() && Auth::user()->usertype == 0 ? Auth::user()->username : null;
        $subclassifications = Subclassification::all();
        $prioritizations = Prioritization::all();
        $actions = Action::all();
        $classifications = Classification::all();

        return view(
            "employee.compose",
            compact(
                'employee_name',
                "subclassifications",
                "actions",
                "prioritizations",
                "classifications"
            )
        );
    }

    public function incoming()
    {
        $employee_name = Auth::check() && Auth::user()->usertype == 0 ? Auth::user()->username : null;
        $documents = Document::where("status", 'incoming')->get();

        return view("employee.incoming", compact('employee_name', 'documents'));
    }

    public function received()
    {
        $employee_name = Auth::check() && Auth::user()->usertype == 0 ? Auth::user()->username : null;
        $documents = Document::where("status", 'received')->get();

        return view("employee.received", compact('employee_name', 'documents'));
    }

    public function outgoing()
    {
        $employee_name = Auth::check() && Auth::user()->usertype == 0 ? Auth::user()->username : null;
        $documents = Document::where("status", 'outgoing')->get();

        return view("employee.outgoing", compact('employee_name', 'documents'));
    }

    public function pending()
    {
        $employee_name = Auth::check() && Auth::user()->usertype == 0 ? Auth::user()->username : null;
        $documents = Document::where('status', 'pending')->get();

        return view("employee.pending", compact('employee_name', 'documents'));
    }

    public function archive()
    {
        $employee_name = Auth::check() && Auth::user()->usertype == 0 ? Auth::user()->username : null;
        $documents = Document::where('status', 'archive')->get();

        return view("employee.archive", compact('employee_name', 'documents'));
    }

    // public function show($id)
    // {
    //     $employee_name = Auth::check() && Auth::user()->usertype == 0 ? Auth::user()->username : null;
    //     $document = Document::findOrFail($id);

    //     return view('view-document', compact('employee_name', 'document'));
    // }
}
