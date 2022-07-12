<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    public function index()
    {
        $items = DB::select('select * from inquiry');
        return view('/', ['items' => $items]);
    }
}
