<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
class DepartmentsController extends Controller
{public function store(Request $request){
    $request->validate([
        "department_name"=> "required",
    ]);

    $documents = Department::create([
        "department_name"=> $request->department_name,
    ]);

    return view(route("admin.home", absolute:false));
    }
    
}
