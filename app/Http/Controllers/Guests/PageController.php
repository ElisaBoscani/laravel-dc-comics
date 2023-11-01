<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\DcComics;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $comics = DcComics::all();
        return view('home', compact('comics'));
    }
}
