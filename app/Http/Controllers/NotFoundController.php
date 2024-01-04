<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotFoundController extends Controller
{
    public function __invoke(){
        return view('errors.404');
    }
}
