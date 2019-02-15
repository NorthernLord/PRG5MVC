<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design, UX Design','HTML, CSS','Javascript, jQuery','Typescript', 'PHP, Laravel','Git', 'REST, RESTful API', 'Adobe Photoshop', 'Adobe XD']
        );
        return view('pages.services')->with($data);
    }

    public function portfolio() {
        return view('pages.portfolio');
    }

    public function validation() {
        $pathToFile = 'storage/files/ACB922EB1010A2C15BD685B769237544.txt';
        return response()->file($pathToFile);
    }
}
