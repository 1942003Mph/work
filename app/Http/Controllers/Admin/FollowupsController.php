<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\employee;
use App\Models\followup;
use Illuminate\Http\Request;

class FollowupsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
        $employees = employee::where('perod' , '=' , 'am')->get();
        
        return view('admin.followup.index' , compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = employee::where('perod' , '=' , 'am')->get();
        
        return view('admin.followup.index' , compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'timein'   => 'required',
            'jobid'      => 'required',
        ]);

        // dd($_POST);
        

        
        followup::create([
            'timein'        => $request->timein,
            'jobid'          => $request->jobid,
        ]);

        return redirect()
        ->route('admin.followups.index')
        ->with('msg', 'تم اضافة المظف بنجاح')
        ->with('type', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
