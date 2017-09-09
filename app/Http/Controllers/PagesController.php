<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Incident;

class PagesController extends Controller
{

    public function desktop()
    {
        return view('pages.desktop');
    }

}
