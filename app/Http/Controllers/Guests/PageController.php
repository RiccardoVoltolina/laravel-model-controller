<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $saluto = 'ciao';
        return view('pages.movies', compact('saluto'));
    }
}