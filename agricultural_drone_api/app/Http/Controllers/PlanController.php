<?php

namespace App\Http\Controllers;

use App\Http\Resources\PlanResource;
use App\Models\Instruction;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $plans=Plan::all();
        return response()->json(['message' => 'success', 'plans' => $plans],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator=Validator::make($request->all(),[
            'name' => 'required',
            'type' => 'required',
            'date'=>'required',
            'time' =>'required|unique:plans',
            'area' =>'required',
            'density'=>'required',
        ]);
        if($validator->fails()){
            return response()->json(['message'=>$validator->errors()],404);
        }else{
            $plan=Plan::create($validator->validated());
            return response()->json(['message'=>'successfully created','data'=>$plan],200);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($name)
    {
        //
        $plan = Plan::where('name', $name)->first();
        $plan = new PlanResource($plan);
        return response()->json(['message' => 'success', 'data' => $plan], 200);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plan $plan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plan $plan)
    {
        //
    }
}
