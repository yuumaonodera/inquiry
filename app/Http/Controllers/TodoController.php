<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $item = Todo::all();
        return view('index', ['item' => $item]);
    }
    public function create(Request $request)
    {
        $valifate_rule = [
          'content' => 'required',
        ];
        $form = $request->all();
        Todo::create($form);
        return redirect('/');
    }
}
