<?php

namespace App\Http\Controllers;
use App\Models\Role;
use Illuminate\Http\Request;
use  App\Http\Request\RoleRequest;
class roleController extends Controller
{
    public function create(){
        return view('role.create');
    }
    public function store(RoleRequest $request){
       $role = Role::create([
            'role_name'=> $request->role_name
        ]);
        if ($role)
        return response() -> json([
        'status'=>true,
            'msg'=>'added successfully',

        ]);
        else
            return response() -> json([
                'status'=>false,
                'msg'=>'fail to add',

            ]);
    }

    public function show(){
        $role=Role::select('role_id','role_name')->get();
        return view('role.show',compact( 'role'));
    }
   

    public function delete(Request $request){
        $role=Role::find($request->id);
        if(!$role)
            return redirect()->back()->with(['error'=>'role not exists']);
        $role->delete();

            return response() -> json([
                'status'=>true,
                'msg'=>'deleted successfully',
                 'id'=>$request->id,
            ]);

    }
    public function edit(Request $request){
        $role=Role::find($request->role_id);
        if(!$role)

            return response() -> json([
                'status'=>false,
                'msg'=>' not exist',

            ]);


        $role=Role::select('role_id','role_name')->find($request->role_id);
        return view('role.edit',compact( 'role'));
    }
    public function update(RoleRequest $request){
        $role=Role::find($request->role_id);
        if(!$role)
            return response() -> json([
                'status'=>false,
                'msg'=>' not exist',

            ]);

        $role->update($request -> all());
        return response() -> json([
            'status'=>true,
            'msg'=>'  updated successfully',

        ]);
    }
}
