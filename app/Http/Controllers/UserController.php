<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

use Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'students'=>student::get()
            ]);
            
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new student;

        $student->name=$request->name;
        $student->email=$request->email;
        $student->age=$request->age;
        $student->city=$request->city; 

        $student->save();
        return response()->json([
        'message' => 'Student    Created',
        'status' => 'success',
        'data' => $student
        ]);

       
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        return response()->json(['student'=>$student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student)
    {
        $student->name=$request->name;
        $student->email=$request->email;
        $student->age=$request->age;
        $student->city=$request->city; 

        $student->save();

        return response()->json([
            'message'=>'student update',
            'status'=>'success',
            'data'=>$student
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
        $student->delete();
        return response()->json([
            'message'=>'student Delete',
            'status'=>'success'
        ]);
    }
}
