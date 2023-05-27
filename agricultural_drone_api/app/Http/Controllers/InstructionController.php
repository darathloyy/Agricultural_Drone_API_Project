<?php

namespace App\Http\Controllers;

use App\Models\Drone;
use App\Models\Instruction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InstructionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $instructions=Instruction::all();
        return response()->json(['message' =>'successfully','data'=>$instructions],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Instruction $instruction)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $instruction=Instruction::find($id);
        
        $validator=Validator::make($request->all(),[
            'run_mode' => 'required',
            'status' =>'required',
            'feedback' =>'required',
            'drone_id' =>'required',
            'plan_id'=>'required',
        ]);
        if($validator->fails()){
            return response()->json(['message'=>$validator->errors()],404);
        }else{
            $instruction->update($validator->validated());
            return response()->json(['message'=>'successfully created','data'=>$instruction],200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instruction $instruction)
    {
        //
    }
}
