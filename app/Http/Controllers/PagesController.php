<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function about() {
        return view('pages.about');
    }

    public function portfolio() {
        return view('pages.portfolio');
    }

}
