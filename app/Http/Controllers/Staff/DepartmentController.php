<?php

namespace App\Http\Controllers\staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Paginate;
use App\Models\staff\Department;

class DepartmentController extends Controller
{
    public function Index()
    {
        $departments = Department::paginate(10);
        return view('staff.department', compact('departments'));
    
    }
    public function store(Request $request)
    {

        
    
        
        
        $validatedData =  $request->validate([
            'facultyname' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'shortname' => 'required|string|max:255',
            'status' => 'required|digits:1'],
            
    [
        'shortname.required'=>'Department Short Name is Mandatory',
        'facultyname.required'=>'Select Faculty Name'

    ] );
     try {
        $query= DB::table('department_master')->insert([
            'faculty_id' => $request->input('facultyname'),
            'department_name' => $request->input('name'),
            'department_short_name' => $request->input('shortname'),
            'status' => $request->input('status'),
            'created_at' => now(),
            'created_by' =>Auth::user()->id
        ]);
             
        return response()->json([
            'success' => true,
            'message' => 'Department created successfully!',
            'data' => $validatedData,
        ]);
       
     }
    catch (\Exception $e) {
       
    
        return response()->json([
            'success' => false,
            'message' => 'Something went wrong try again !!!!!',
            'data' => $validatedData,
        ]);
    }
    }
}
