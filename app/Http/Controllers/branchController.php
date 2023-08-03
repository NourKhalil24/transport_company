<?php

namespace App\Http\Controllers;
use App\Models\Branch;
use Illuminate\Http\Request;
use  App\Http\Request\BranchRequest;
class branchController extends Controller
{
    public function create(){
        return view('branch.create');
    }
    public function store(BranchRequest $request){
       $branch = Branch::create([
            'branch_name'=> $request->branch_name,
            'branch_address'=> $request->branch_address,
           'branch_city'=> $request->branch_city,
           'branch_street'=> $request->branch_street
        ]);
        if ($branch)
        return response() -> json([
        'status'=>true,
            'msg'=>'تم الحفظ بنجاح',

        ]);
        else
            return response() -> json([
                'status'=>false,
                'msg'=>'فشل',

            ]);
    }

    public function show(){
        $branch=Branch::select('branch_id','branch_name','branch_city','branch_street')->get();
        return view('branch.show',compact( 'branch'));
    }
    public function showUser(){
        $branch=Branch::select('branch_id','branch_name','branch_city','branch_street')->get();
        return view('include.contact',compact( 'branch'));
    }

    public function delete(Request $request){
        $branch=Branch::find($request->id);
        if(!$branch)
            return redirect()->back()->with(['error'=>'branch not exists']);
        $branch->delete();

            return response() -> json([
                'status'=>true,
                'msg'=>'تم الحفظ بنجاح',
                 'id'=>$request->id,
            ]);

    }
    public function edit(Request $request){
        $branch=Branch::find($request->branch_id);
        if(!$branch)

            return response() -> json([
                'status'=>false,
                'msg'=>' هذا الفرع غير موجود',

            ]);


        $branch=Branch::select('branch_id','branch_name','branch_city','branch_street')->find($request->branch_id);
        return view('branch.edit',compact( 'branch'));
    }
    public function update(BranchRequest $request){
        $branch=Branch::find($request->branch_id);
        if(!$branch)
            return response() -> json([
                'status'=>false,
                'msg'=>' هذا الفرع غير موجود',

            ]);

        $branch->update($request -> all());
        return response() -> json([
            'status'=>true,
            'msg'=>'   تم التحديث بنجاح',

        ]);
    }
}
