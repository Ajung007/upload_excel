<?php

namespace App\Http\Controllers;

use App\Imports\DppspmImport;
use App\Models\Dppspm;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DppspmController extends Controller
{
    function index()
    {
        $count = Dppspm::count();

        $data = Dppspm::paginate(10);

        return view('dppspm', ['count' => $count, 'data' => $data]);
    }
    public function upload()
    {
        Excel::import(new DppspmImport, request()->file('file'));
        return back();
    }
    public function delete()
    {
        Dppspm::truncate();

        return back();
    }
}