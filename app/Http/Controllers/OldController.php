<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OldController extends Controller
{
    public function __invoke()
    {
        return view('welcome-backup');
    }
}
