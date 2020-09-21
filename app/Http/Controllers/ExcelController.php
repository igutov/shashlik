<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Imports\GoodsImport;
use App\Exports\GoodsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ExcelController extends Controller
{
    public function index()
    {
        return view('file.file_action');
    }

    public function export()
    {
        return Excel::download(new GoodsExport, 'goods.xlsx');
    }

    public function import(Request $request)
    {
        DB::table('food')->delete();

        Excel::import(new GoodsImport, request()->file('file'));

        return back()->withInput();
    }
}
