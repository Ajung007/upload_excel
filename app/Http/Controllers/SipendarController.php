<?php

namespace App\Http\Controllers;

use App\Imports\SipendarImport;
use App\Models\Sipendar;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SipendarController extends Controller
{
    public function index()
    {
        $data = Sipendar::paginate(10);

        $count = Sipendar::count();
        // dd($data);

        return view('sipendar', ['data' => $data, 'count' => $count]);
    }

    public function upload()
    {
        Excel::import(new SipendarImport, request()->file('file'));
        return back();
    }

    public function delete()
    {
        Sipendar::truncate();

        return back();
    }
}