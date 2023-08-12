<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->has('search')) {
            $employees = employee::latest('id')
            ->where('name', 'like', '%' . $request->search . '%')
            ->paginate(20);
        }else {
            $employees = employee::latest('id')->paginate(20);
        }

        return view('admin.employees.index',compact('employees'));
    }
    
    public function morningperiod(Request $request)
    {
        // $employees = employee::where('perod' , '=' , 'am')->paginate(15);
        if($request->has('search')) {
             $employees = employee::where('perod' , '=' , 'am')->latest('id')
            ->where('name', 'like', '%' . $request->search . '%')
            ->paginate(20);
        }else {
            $employees = employee::where('perod' , '=' , 'am')->paginate(15);
        }
        
        return view('admin.employees.morningperiod',compact('employees'));
    }
    
    public function evningperiod(Request $request)
    {
        // $employees = employee::where('perod' , '=' , 'am')->paginate(15);
        if($request->has('search')) {
             $employees = employee::where('perod' , '=' , 'pm')->latest('id')
            ->where('name', 'like', '%' . $request->search . '%')
            ->paginate(20);
        }else {
            $employees = employee::where('perod' , '=' , 'pm')->paginate(15);
        }
        
        return view('admin.employees.evningperiod',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'jobid'   => 'required',
            'name'      => 'required',
            'jop'      => 'required',
            'perod'         => 'required',
        ]);

        // dd($_POST);
        

        
        employee::create([
            'jobid'         => $request->jobid,
            'name'          => $request->name,
            'jop'           => $request->jop,
            'perod'         => $request->perod,
        ]);

        return redirect()
        ->route('admin.employees.index')
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
        $employees = employee::find($id);
        return view('admin.employees.edit',  compact('employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        

        $request->validate([
            'jobid'   => 'required',
            'name'      => 'required',
            'jop'      => 'required',
            'perod'      => 'required',
             ]) ;
       
        $employees = employee::find($id);
  
         $employees->update([
             'jobid'  =>$request->jobid,
             'jop'          =>$request->jop,
             'name'         =>$request->name,
             'perod'           =>$request->perod,
         ]);
         return redirect()
         ->route('admin.employees.index')
         ->with('msg', 'تم التعديل بنجاح')
         ->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employees = employee::find($id);
        $employees->delete();

        return redirect()
        ->route('admin.employees.index')
        ->with('msg', 'تم حذف الموظف بنجاح')
        ->with('type', 'danger');
    }
}
