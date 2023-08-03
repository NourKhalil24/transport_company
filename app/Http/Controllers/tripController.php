<?php

namespace App\Http\Controllers;
use App\Models\Branch;
use App\Models\Trip;
use Illuminate\Http\Request;
use  App\Http\Request\TripRequest;
class tripController extends Controller
{
    public function create(){
        return view('trip.create');
    }
    public function store(Request $request){
       $trip =Trip::create([
            'trip_source'=> $request->trip_source,
            'trip_destination'=> $request->trip_destination,
           
        'departure_time'=> $request->departure_time,
        'departure_day'=> $request->departure_day,
        
        'cost'=> $request->cost
        ]);
        if ($trip)
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
          $trip=Trip::select('trip_id','trip_source','trip_destination','departure_time','departure_day','cost')->get();

        return view('Trip/show',compact( 'trip'));
    }
    public function showUser(){
        $trip=Trip::select('trip_id','trip_source','trip_destination','departure_time','departure_day','cost')->get();

        return view('trip',compact( 'trip'));
    }
    public function delete(Request $request){
        $trip=Trip::find($request->id);
        if(!$trip)
            return redirect()->back()->with(['error'=>'trip not exists']);
        $trip->delete();

            return response() -> json([
                'status'=>true,
                'msg'=>'added successfully',
                 'id'=>$request->id,
            ]);

    }
    public function edit(Request $request){
        $trip=Trip::find($request->trip_id);
        if(!$trip)

            return response() -> json([
                'status'=>false,
                'msg'=>'not exist'
            ]);


        $trip=Trip::select('trip_id','trip_source','trip_destination','departure_time','departure_day','cost')->find($request->trip_id);
        return view('trip.edit',compact( 'trip'));
    }
    public function update(Request $request){
        $trip=Trip::find($request->trip_id);
        if(!$trip)
            return response() -> json([
                'status'=>false,
                'msg'=>' هذه الرحلة غير موجود',

            ]);

        $trip->update($request -> all());
        return response() -> json([
            'status'=>true,
            'msg'=>'   تم التحديث بنجاح',

        ]);
    }
}