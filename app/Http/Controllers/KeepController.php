<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keep;
use App\Models\Todo;

class KeepController extends Controller
{
    public function index(Request $request)
    {
        $item = Todo::all();
        return view('keep', [$request->id]);
    }
}
