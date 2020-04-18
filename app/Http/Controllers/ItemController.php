<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Item;

class ItemController extends Controller
{
    @return void

        public function __construct()
    {
        $this->middleware('auth');
    }
}
