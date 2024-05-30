<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class employeemanagement extends Controller
{
    public function index()
    {
        return view('employee.index');
    }

    public function store(Request $request)
    {
       $employ= [
           'first_name' => $request->input('first_name'),
           'last_name' => $request->input('last_name'),
           'DOB' => $request->input('DOB'),
           'phone' => $request->input('phone'),
        
       ];
   
       employee::create($employ);   
       return redirect('employee');
    }

    public function show(){
        $employ = employee::get();
        return view('employee.show', compact('employ'));
    }
        
    public function change(int $id){
        $tchange = employee::find($id);
       ;
        return view('employee.edit' , compact('tchange'));
    }

    public function update(Request $request,int $id){
        employee::find($id)->update([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'DOB'=>$request->DOB,
            'phone'=>$request->phone,

        ]);
        return redirect()->back();  
}

}