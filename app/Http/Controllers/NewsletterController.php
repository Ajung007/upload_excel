<?php

namespace App\Http\Controllers;

use App\Imports\NewsletterImport;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class NewsletterController extends Controller
{
    function index()
    {
        $count = Newsletter::count();

        $data = Newsletter::paginate(10);

        return view('newsletter', ['count' => $count, 'data' => $data]);
    }
    public function upload()
    {
        Excel::import(new NewsletterImport, request()->file('file'));
        
        return back();
    }
    public function delete()
    {
        Newsletter::truncate();

        return back();
    }
}