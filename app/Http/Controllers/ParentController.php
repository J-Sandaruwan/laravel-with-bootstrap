<?php

namespace App\Http\Controllers;

use domain\Facades\Transactions\WalletFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['verified']);
    }
}
