<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $item = Todo::all();
        return view('index')->with('item',$item);
    }
    public function create(Request $request)
    {
        $form = $request->all();
        Todo::create($form);
        return redirect('/');
    }
}
