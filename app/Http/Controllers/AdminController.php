<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function index(Request $request)
    {
        return redirect('/admin/location');
    }
}
