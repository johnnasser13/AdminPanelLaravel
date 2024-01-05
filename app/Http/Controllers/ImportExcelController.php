<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ImportExcelController extends Controller
{
    function index()
    {
        $data = DB::table('users')->orderBy('id','desc')->get();
        return view('import_excel', compact('data'));
    }
}
