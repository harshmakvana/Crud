<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class FormController extends Controller
{


    //searchbar-------------Searching
    function search_data (Request $request){
        $data = $request->input('search');
     $data =  DB::table('students')
     ->orderBy('name')
     ->where('name', 'like' , '%'.$data.'%')
     ->get();
     return view('searchstudent', compact('data'));
    }
}
