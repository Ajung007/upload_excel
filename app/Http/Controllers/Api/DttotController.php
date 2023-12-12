<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DataResource;
use App\Models\Dttot;
use Illuminate\Http\Request;

class DttotController extends Controller
{
    public function index()
    {
        $data = Dttot::all();

        return new DataResource(true, 'Get Data', $data);
    }
}
