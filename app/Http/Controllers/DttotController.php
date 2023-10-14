<?php

namespace App\Http\Controllers;

use App\DataTables\DttotDataTable;
use App\Imports\DttotImport;
use App\Models\Dttot;
use DB;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DttotController extends Controller
{
    public function index(DttotDataTable $datTable)
    {
        $data = Dttot::paginate(10);
        // $data = Dttot::all();
        $count = Dttot::count();

        // dd($data);

        return view('dttot', ['data' => $data, 'count' => $count]);
    }
    public function upload()
    {
        Excel::import(new DttotImport, request()->file('file'));
        return back();
    }

    public function delete()
    {
        Dttot::truncate();

        return back();
    }

}