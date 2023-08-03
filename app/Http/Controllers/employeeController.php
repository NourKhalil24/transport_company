<?php

namespace App\Http\Controllers;
use App\Models\Branch;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\User;
use  App\Http\Request\EmployeeRequest;
class employeeController extends Controller
{
     public function create(){
        return view('employee.create');
    }
    public function store(EmployeeRequest $request){
       $employee = Employee::create([
            'user_id'=> $request->user_id,
            'hiring_date'=> $request->hiring_date,
           'salary'=> $request->salary,
           'branch_id'=> $request->branch_id
        ]);
        if ($employee)
        return response() -> json([
        'status'=>true,
            'msg'=>'added successflly',

        ]);
        else
            return response() -> json([
                'status'=>false,
                'msg'=>'fail',

            ]);
    }

    public function show(){
        $employee=Employee::select('user_id','hiring_date','salary','branch_id','id')->get();
        return view('employee.show',compact( 'employee'));
    }
   

    public function delete(Request $request){
        $employee=Employee::find($request->id);
        if(!$employee)
            return redirect()->back()->with(['error'=>'employee not exists']);
        $employee->delete();

            return response() -> json([
                'status'=>true,
                'msg'=>'deleted succusfuly',
                 'id'=>$request->id,
            ]);

    }
    public function edit(Request $request){
        $employee=Employee::find($request->user_id);
        if(!$employee)

            return response() -> json([
                'status'=>false,
                'msg'=>' not exsited',

            ]);

 $branch=Branch::select('branch_id','branch_name')->get();
        
        $employee=Employee::select('user_id','hiring_date','salary','branch_id')->find($request->user_id);
        return view('employee.edit',compact( 'employee','branch'));
    }
    public function update(EmployeeRequest $request){
        $employee=Employee::find($request->user_id);
        if(!$employee)
            return response() -> json([
                'status'=>false,
                'msg'=>' not exsited',

            ]);

        $employee->update($request -> all());
        return response() -> json([
            'status'=>true,
            'msg'=>' updated succesfully',

        ]);
    }
}
