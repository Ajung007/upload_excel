<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DataResource;
use App\Models\Sipendar;
use Illuminate\Http\Request;

class SipendarController extends Controller
{
    public function index()
    {
        $data = Sipendar::all();

        return new DataResource(true, 'Get Sipendar', $data);
    }
}
