<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\ParentController;
use Illuminate\Http\Request;

class IndexController extends ParentController
{
    public function index()
    {
        return view('pages.index.index');
    }
}
