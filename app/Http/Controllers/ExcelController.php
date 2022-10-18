<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UserImport;
use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;


class ExcelController extends Controller
{
    function importExportView(){
        return view('import');
    }
    function export(){
        return Excel::download(new UserExport, 'user.xlsx');
    }

    function import(){
        Excel::import(new UserImport, request()->file('file'));
        return back();
    }
}
