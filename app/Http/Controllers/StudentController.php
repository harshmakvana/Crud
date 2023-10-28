<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  
use App\Models\Student;

class StudentController extends Controller
{
    
    //All Student  Data Show
    public function showStudents(){
        $students = DB::table('students')
        ->orderBy('name')
        ->Paginate(4);
       return view('allstudents',['data' => $students]);
    }

    // //Single Data Show-------------------------view
    // public function singleStudent(string $id){
    //     $student = DB::table('students')->where('id',$id)->get();
    //     return view('student',['data'=> $student]);
    // }


    //Add Student Data--------------------------insert
    public function createStudent(Request $request){
        $student = DB::table('students')
                    ->insert([
                        [
                        'name' =>  $request->studentname,
                        'email'=> $request->studentemail,
                        'age' => $request->studentage,
                        'city' => $request->studentcity,
                        ]
                    ]);
                if($student){
                    return redirect()->route('home');
                }else{
                    echo "<h1>Data Not Added.<h1/>";
                }
    }

    //Showing Update Page
    public function updatePage(string $id){
        $student = DB::table('students')->find($id);    
        return view('updatestudent',['data'=> $student]);
    }


    //Updata Student Data----------------------Update
    public function updateStudent(Request $request, $id){
        $student = DB::table('students')
            ->where('id', $id)
            ->update([
                        'name' =>  $request->studentname,
                        'email'=> $request->studentemail,
                        'age' => $request->studentage,
                        'city' => $request->studentcity,
                    ]);
                    if($student){ 
                        return redirect()->route('home');
                    }else{
                        echo"<h1>Data not Updated.</h1>";
                    }
    }


    //Delete Student Data--------------------Delete
    public function deleteStudent(string $id){
        $student = DB::table('students')
        ->where('id',$id)
        ->delete();

        if($student){
            return redirect()->route('home');
        }
    }
}
