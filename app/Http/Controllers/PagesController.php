<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        // GET Homepage Content

        return view('pages.index');
    }

}
