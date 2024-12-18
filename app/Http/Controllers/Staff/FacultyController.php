<?php

namespace App\Http\Controllers\staff;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Paginate;
use App\Models\staff\Faculty;




class FacultyController extends Controller
{
    public function Index()
    {
        $faculties = Faculty::paginate(10);
        return view('staff.faculty', compact('faculties'));
    
    }

    public function store(Request $request)
{


    
    $request->validate([
        'orgname' => 'required|string|max:255',
        'name' => ['required', 'regex:/^[\pL\s]+$/u'],
         'shortname' => 'required|string|max:255',
        'status' => 'required|digits:1',],
                [
            'orgname.required' => 'Please Select Orgnisation Name.',
            'name.alpha_spaces' => 'Please enter faculty name in plain text.',
            'name.rquired' => 'Please enter faculty name',
            'shortname.required' => 'Please enter faculty short name.',
           
        ]);
    try {
    DB::table('faculty_master')->insert([
        'org_id' => $request->input('orgname'),
        'faculty_name' => $request->input('name'),
        'faculty_short_name' => $request->input('shortname'),
        'status' => $request->input('status'),
        'created_at' => now(),
        'created_by' =>Auth::user()->id
    ]);

   // Return a response or redirect
    return redirect()->back()->with('success', 'Faculty created successfully!');
}
catch (\Exception $e) {
    // Flash error message
    return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
}
}
}
