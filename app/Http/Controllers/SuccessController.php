<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuccessController extends Controller
{
    protected function show()
    {
        return view('success');
    }
}
