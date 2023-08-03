<?php

namespace App\Http\Controllers;
use App\Models\Good;
use App\Models\Branch;
use Illuminate\Http\Request;
use  App\Http\Request\GoodRequest;
class goodController extends Controller
{

//////////////  create for admin /////////

    public function create(){
         $source=Branch::select('branch_id','branch_name')->get();
  $destination=Branch::select('branch_id','branch_name')->get();
  return view('good.create',compact('source','destination'));
      //  return view('good.create');

    }
////////////create for user /////////
public function createuser(){
    $source=Branch::select('branch_id','branch_name')->get();
$destination=Branch::select('branch_id','branch_name')->get();
return view('create',compact('source','destination'));
 //  return view('good.create');

}


///////////store for admin ///////////
    public function store(GoodRequest $request){
       $good = Good::create([
            'description'=> $request->description,
            'sender'=> $request->sender,
            'receiver'=> $request->receiver,
            'sender_phone'=> $request->sender_phone,
            'receiver_phone'=> $request->receiver_phone,
            'weight'=> $request->weight,
            
            'source'=> $request->source,
            'destination'=> $request->destination
        ]);
        if ($good)
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
    ///////////////store for user ////////////
    public function storeuser(Request $request){
        $good = Good::create([
             'description'=> $request->description,
             'sender'=> $request->sender,
             'receiver'=> $request->receiver,
             'sender_phone'=> $request->sender_phone,
             'receiver_phone'=> $request->receiver_phone,
             'weight'=> $request->weight,
             
             'source'=> $request->source,
             'destination'=> $request->destination
         ]);
         if ($good)
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
///////////////////show for admin//////////

    public function show(){
        $good=Good::select('goods_id','description','sender','receiver','sender_phone','receiver_phone','weight','source','destination')->get();
        return view('good.show',compact( 'good'));
    }


        ////////////////show for user ////////////
    public function showuser(){
        $good=Good::select('goods_id','description','sender','receiver','sender_phone','receiver_phone','weight','source','destination')->get();
        return view('show',compact( 'good'));
    }
   



    public function delete(Request $request){
        $good=Good::find($request->id);
        if(!$good)
            return redirect()->back()->with(['error'=>'good not exists']);
        $good->delete();

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
