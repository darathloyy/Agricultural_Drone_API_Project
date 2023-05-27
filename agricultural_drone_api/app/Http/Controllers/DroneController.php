<?php

namespace App\Http\Controllers;

use App\Http\Resources\DroneDetailResource;
use App\Http\Resources\DroneLocationResource;
use App\Http\Resources\LocationResource;
use App\Models\Drone;
use App\Models\Instruction;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DroneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $drones=Drone::all();
        return response()->json(['message' => 'success', 'drones' => $drones],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator=Validator::make($request->all(),[
            'model' => 'required',
            'battery' =>'required',
            'manufacturer' =>'required',
            'payload' =>'required',
            'price'=>'required',
            'type_drone_id'=>'required',
            'location_id'=>'required',
            'user_id'=>'required',
        ]);
        if($validator->fails()){
            return response()->json(['message'=>$validator->errors()],404);
        }else{
            $drone=Drone::create($validator->validated());
            return response()->json(['message'=>'successfully created','data'=>$drone],200);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $drone=Drone::find($id);
        return response()->json(['message' => 'success', 'data' => $drone],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $drone=Drone::find($id);
        
        $validator=Validator::make($request->all(),[
            'model' => 'required',
            'battery' =>'required',
            'manufacturer' =>'required',
            'payload' =>'required',
            'price'=>'required',
            'type_drone_id'=>'required',
            'location_id'=>'required',
            'user_id'=>'required',
        ]);
        if($validator->fails()){
            return response()->json(['message'=>$validator->errors()],404);
        }else{
            $drone->update($validator->validated());
            return response()->json(['message'=>'successfully created','data'=>$drone],200);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Drone $drone)
    {
        //
    }
    public function getDroneLocation($id)
    {
        $drone=Drone::find($id);
        $drone=new DroneLocationResource($drone);
        return response()->json(['message' => 'success', 'data'=>$drone],200);
    }
    
    
        
    
}
