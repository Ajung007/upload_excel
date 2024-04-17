<?php

namespace App\Http\Controllers;

use App\DataTables\DttotDataTable;
use App\Imports\DttotImport;
use App\Models\Dttot;
use DB;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;

use function Laravel\Prompts\info;

use function Laravel\Prompts\alert;

class DttotController extends Controller
{
    public function index(DttotDataTable $datTable)
    {
        $data = Dttot::paginate(10);
        $dttot = Dttot::find(1); // Mengambil objek Dttot dengan ID 1
        $count = Dttot::count();

        if($count != 0)
        {
            $created_at = $dttot->created_at;
            $create = $created_at->format('d F Y');
        }else{            
            $create = 0;
        }
        
        return view('pages.dttot.index', ['data' => $data, 'count' => $count, 'create' => $create]);
    }
    public function upload(Request $request)    
    {
        $request->validate([
            'file' => 'mimes:xls,xlsx|required'
        ]);

        $path = $request->file('file');
        $data = Excel::import(new DttotImport, $path);

        // dd($data);
        return redirect()->route('dttot.index')->with('message','Data Berhasil Terupload');
    }

    public function delete()
    {
        Dttot::truncate();

        return redirect()->route('dttot.index')->with('message','Data Berhasil Terhapus');
    }


    public function rekap(DttotDataTable $dataTable)
    {
        return $dataTable->render('pages.dttot.rekap');

        // return view('pages.dttot.rekap');
    }   

}
