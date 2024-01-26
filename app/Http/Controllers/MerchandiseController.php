<?php

namespace App\Http\Controllers;

use App\Models\Merchandise;
use Illuminate\Http\Request;

class MerchandiseController extends Controller
{
    public function index()
    {
        $merchandises = Merchandise::all();
        return view('merchandise.index', compact('merchandises'));
    }

    public function show(Merchandise $merchandise)
    {
        return view('merchandise.show', compact('merchandise'));
    }
}
