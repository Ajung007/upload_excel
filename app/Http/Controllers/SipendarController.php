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
        $create = Sipendar::find(1);
        $count = Sipendar::count();
        // dd($data);

        return view('pages.sipendar.index', ['data' => $data, 'count' => $count, 'create' => $create]);
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'mimes:xls,xlsx|required'
        ]);

        $path = $request->file('file');
        $data = Excel::import(new SipendarImport, $path);

        return redirect()->route('sipendar.index')->with('message','Data Berhasil Terupload');
    }

    public function delete()
    {
        Sipendar::truncate();

        return redirect()->route('sipendar.index')->with('message','Data Berhasil Terhapus');
    }
}