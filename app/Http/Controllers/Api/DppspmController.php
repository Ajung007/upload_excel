<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DataResource;
use App\Models\Dppspm;
use Illuminate\Http\Request;

class DppspmController extends Controller
{
    public function index()
    {
        $data = Dppspm::all();

        return new DataResource(true, 'Get Dppspm', $data);
    }
}
