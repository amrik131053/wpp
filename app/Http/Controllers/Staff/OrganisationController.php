<?php

namespace App\Http\Controllers\Staff;
use Illuminate\Support\Facades\DB;
use Auth;
use Paginate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\staff\Organisation;

class OrganisationController extends Controller
{
    public function ViewOrganisation()
{
    $organisations = Organisation::orderBy('id', 'desc')->paginate(10);
    return view('staff.organisation', compact('organisations'));


    //return view('staff.faculty', compact('organisations'));

}



public function store(Request $request)
{

    $request->validate([
        'name' => 'required|string|max:255',
        'shortname' => 'required|string|max:255',
        'status' => 'required|digits:1',
        
    ]);
    
    DB::table('organisation_master')->insert([
        'organisation_name' => $request->input('name'),
        'organisation_short_name' => $request->input('shortname'),
        'organisation_status' => $request->input('status'),
        'created_at' => now(),
        'created_by' =>Auth::user()->id
    ]);


    // Return a response or redirect
    return redirect()->back()->with('success', 'Organization created successfully!');
}
}
